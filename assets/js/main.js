

        document.addEventListener('readystatechange', event => {
          if (event.target.readyState === "complete") {
              var clockdiv = document.getElementsByClassName("room-search-timer");
            var countDownDate = new Array();
              for (var i = 0; i < clockdiv.length; i++) {
                  countDownDate[i] = new Array();
                  countDownDate[i]['el'] = clockdiv[i];
                  countDownDate[i]['time'] = new Date(clockdiv[i].getAttribute('data-date')).getTime();
                  countDownDate[i]['hours'] = 0;
                  countDownDate[i]['minutes'] = 0;
              }
            
            var countdownfunction = setInterval(function() {
      for (var i = 0; i < countDownDate.length; i++) {
                      var now = new Date().getTime();
                      var distance = countDownDate[i]['time'] - now;
                       countDownDate[i]['days'] = Math.floor(distance / (1000 * 60 * 60 * 24));
                       countDownDate[i]['hours'] = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                       countDownDate[i]['minutes'] = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                       countDownDate[i]['seconds'] = Math.floor((distance % (1000 * 60)) / 1000);
                      
                       if (distance < 0) {
                          countDownDate[i]['el'].querySelector('.days').innerHTML = 0;
                      countDownDate[i]['el'].querySelector('.hours').innerHTML = 0;
                      countDownDate[i]['el'].querySelector('.minutes').innerHTML = 0;
                      countDownDate[i]['el'].querySelector('.seconds').innerHTML = 0;
                       }else{
      countDownDate[i]['el'].querySelector('.days').innerHTML = countDownDate[i]['days'];
                      countDownDate[i]['el'].querySelector('.hours').innerHTML = countDownDate[i]['hours'];
                      countDownDate[i]['el'].querySelector('.minutes').innerHTML = countDownDate[i]['minutes'];
                      countDownDate[i]['el'].querySelector('.seconds').innerHTML = countDownDate[i]['seconds'];
      }
        
           }
                  }, 1000);
          }
      });
      
      var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("step");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("step");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("signUpForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }
        
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("step");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("stepIndicator");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }



        