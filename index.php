<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Red Locker | Hotel Booking</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- jQuery UI CSS -->
      <link rel="stylesheet" href="assets/css/jquery-ui.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body>
      <header class="header home">
         <div class="container">
            <div class="row align-items-end">
               <div class="col-xxl-2">
                  <a href="" class="logo">
                  <img src="assets/img/logo-white.png" alt="">
                  </a>
               </div>
               <div class="col-xxl-6">
                  <ul class="menu">
                     <li><a href="">Home</a></li>
                     <li><a href="">Deals</a></li>
                     <li><a href="">Property List</a></li>
                     <li><a href="">Add Property</a></li>
                     <li><a href="">Support</a></li>
                  </ul>
               </div>
               <div class="col-xxl-4">
               <div class="header-right text-end">
                     <div class="btn-group dropdown-center header-right-single">
                        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        BD
                        </button>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="#">Item 1</a></li>
                           <li>
                              <hr class="dropdown-divider">
                           </li>
                           <li><a class="dropdown-item" href="#">Item 2</a></li>
                           <li>
                              <hr class="dropdown-divider">
                           </li>
                           <li><a class="dropdown-item" href="#">Item 3</a></li>
                        </ul>
                     </div>
                     <div class="btn-group dropdown-center header-right-single">
                        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        EN
                        </button>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="#">Item 1</a></li>
                           <li>
                              <hr class="dropdown-divider">
                           </li>
                           <li><a class="dropdown-item" href="#">Item 2</a></li>
                           <li>
                              <hr class="dropdown-divider">
                           </li>
                           <li><a class="dropdown-item" href="#">Item 3</a></li>
                        </ul>
                     </div>
                     <div class="btn-group header-right-alert">
                        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                           <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <mask id="mask0_249_3332" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                                 <rect x="0.422852" width="24" height="24" fill="#D9D9D9"/>
                              </mask>
                              <g mask="url(#mask0_249_3332)">
                                 <path d="M5.42285 18.875C5.20618 18.875 5.02718 18.8 4.88585 18.65C4.74385 18.5 4.67285 18.325 4.67285 18.125C4.67285 17.9083 4.74385 17.729 4.88585 17.587C5.02718 17.4457 5.20618 17.375 5.42285 17.375H6.67285V10.125C6.67285 8.79165 7.08952 7.59565 7.92285 6.53699C8.75619 5.47899 9.83952 4.79999 11.1729 4.49999V3.79999C11.1729 3.44999 11.2939 3.15399 11.5359 2.91199C11.7772 2.67065 12.0729 2.54999 12.4229 2.54999C12.7729 2.54999 13.0685 2.67065 13.3099 2.91199C13.5519 3.15399 13.6729 3.44999 13.6729 3.79999V4.49999C15.0062 4.79999 16.0895 5.47899 16.9229 6.53699C17.7562 7.59565 18.1729 8.79165 18.1729 10.125V17.375H19.4229C19.6395 17.375 19.8189 17.4457 19.9609 17.587C20.1022 17.729 20.1729 17.9083 20.1729 18.125C20.1729 18.325 20.1022 18.5 19.9609 18.65C19.8189 18.8 19.6395 18.875 19.4229 18.875H5.42285ZM12.4229 21.8C11.9229 21.8 11.4979 21.625 11.1479 21.275C10.7979 20.925 10.6229 20.5 10.6229 20H14.2229C14.2229 20.5 14.0479 20.925 13.6979 21.275C13.3479 21.625 12.9229 21.8 12.4229 21.8ZM8.17285 17.375H16.6729V10.125C16.6729 8.94165 16.2562 7.93732 15.4229 7.11199C14.5895 6.28732 13.5895 5.87499 12.4229 5.87499C11.2562 5.87499 10.2562 6.28732 9.42285 7.11199C8.58952 7.93732 8.17285 8.94165 8.17285 10.125V17.375Z" fill="#0F766E"/>
                              </g>
                           </svg>
                        </button>
                        <div class="dropdown-menu">
                           <div class="header-alert-tab">
                              <div class="header-tab-menu" id="myTab" role="tablist">
                                 <span class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Requests</span>
                                 <span class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Message</span>
                              </div>
                              <div class="tab-content" id="myTabContent">
                                 <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="single-alert active">
                                       <h4>Requests - 1 <span>Cox's Bazar. Chittagong</span></h4>
                                       <div class="alert-countdown">
                                          <div class="room-search-timer color-blue" data-date="November 28, 2023 21:14:01">
                                             <span>
                                                <svg width="18" height="18" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <mask id="mask0_356_1664" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                      <rect width="18" height="18" fill="#D9D9D9"/>
                                                   </mask>
                                                   <g mask="url(#mask0_356_1664)">
                                                      <path d="M4.66683 11.6665H9.3335V9.9165C9.3335 9.27484 9.10502 8.72553 8.64808 8.26859C8.19113 7.81164 7.64183 7.58317 7.00016 7.58317C6.3585 7.58317 5.80919 7.81164 5.35225 8.26859C4.8953 8.72553 4.66683 9.27484 4.66683 9.9165V11.6665ZM11.0835 12.8332H2.91683C2.75155 12.8332 2.61291 12.7772 2.50091 12.6652C2.3893 12.5536 2.3335 12.4151 2.3335 12.2498C2.3335 12.0846 2.3893 11.9461 2.50091 11.8345C2.61291 11.7225 2.75155 11.6665 2.91683 11.6665H3.50016V9.9165C3.50016 9.32345 3.6388 8.76675 3.91608 8.24642C4.19297 7.72648 4.57933 7.31095 5.07516 6.99984C4.57933 6.68873 4.19297 6.273 3.91608 5.75267C3.6388 5.23273 3.50016 4.67623 3.50016 4.08317V2.33317H2.91683C2.75155 2.33317 2.61291 2.27717 2.50091 2.16517C2.3893 2.05356 2.3335 1.91512 2.3335 1.74984C2.3335 1.58456 2.3893 1.44592 2.50091 1.33392C2.61291 1.22231 2.75155 1.1665 2.91683 1.1665H11.0835C11.2488 1.1665 11.3872 1.22231 11.4988 1.33392C11.6108 1.44592 11.6668 1.58456 11.6668 1.74984C11.6668 1.91512 11.6108 2.05356 11.4988 2.16517C11.3872 2.27717 11.2488 2.33317 11.0835 2.33317H10.5002V4.08317C10.5002 4.67623 10.3617 5.23273 10.0848 5.75267C9.80755 6.273 9.421 6.68873 8.92516 6.99984C9.421 7.31095 9.80755 7.72648 10.0848 8.24642C10.3617 8.76675 10.5002 9.32345 10.5002 9.9165V11.6665H11.0835C11.2488 11.6665 11.3872 11.7225 11.4988 11.8345C11.6108 11.9461 11.6668 12.0846 11.6668 12.2498C11.6668 12.4151 11.6108 12.5536 11.4988 12.6652C11.3872 12.7772 11.2488 12.8332 11.0835 12.8332Z" fill="#0EA5E9"/>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="days"></span>
                                             <span class="hours"></span>
                                             <span class="minutes"></span>
                                             <span class="seconds"></span>
                                          </div>
                                          <span class="number">
                                             <svg width="18" height="18" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1526_363" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                   <rect width="18" height="18" fill="#D9D9D9"/>
                                                </mask>
                                                <g mask="url(#mask0_1526_363)">
                                                   <path d="M7.00016 10.2083C7.16544 10.2083 7.30408 10.1523 7.41608 10.0403C7.52769 9.92871 7.5835 9.79027 7.5835 9.62499H6.41683C6.41683 9.79027 6.47283 9.92871 6.58483 10.0403C6.69644 10.1523 6.83488 10.2083 7.00016 10.2083ZM4.9585 9.33332H9.04183C9.11961 9.33332 9.18766 9.30416 9.246 9.24582C9.30433 9.18749 9.3335 9.11943 9.3335 9.04166C9.3335 8.96388 9.30433 8.89582 9.246 8.83749C9.18766 8.77916 9.11961 8.74999 9.04183 8.74999H8.75016V7.37916C8.75016 6.95138 8.6335 6.56249 8.40016 6.21249C8.16683 5.86249 7.846 5.63888 7.43766 5.54166V5.39582C7.43766 5.26943 7.39644 5.16482 7.314 5.08199C7.23116 4.99955 7.12655 4.95832 7.00016 4.95832C6.87377 4.95832 6.76936 4.99955 6.68691 5.08199C6.60408 5.16482 6.56266 5.26943 6.56266 5.39582V5.54166C6.15433 5.63888 5.8335 5.86249 5.60016 6.21249C5.36683 6.56249 5.25016 6.95138 5.25016 7.37916V8.74999H4.9585C4.88072 8.74999 4.81266 8.77916 4.75433 8.83749C4.696 8.89582 4.66683 8.96388 4.66683 9.04166C4.66683 9.11943 4.696 9.18749 4.75433 9.24582C4.81266 9.30416 4.88072 9.33332 4.9585 9.33332ZM3.50016 12.25C3.17933 12.25 2.90477 12.1359 2.6765 11.9076C2.44783 11.6789 2.3335 11.4042 2.3335 11.0833V5.83332C2.3335 5.6486 2.37491 5.4736 2.45775 5.30832C2.54019 5.14305 2.65433 5.00693 2.80016 4.89999L6.30016 2.27499C6.40711 2.19721 6.51891 2.13888 6.63558 2.09999C6.75225 2.0611 6.87377 2.04166 7.00016 2.04166C7.12655 2.04166 7.24808 2.0611 7.36475 2.09999C7.48141 2.13888 7.59322 2.19721 7.70016 2.27499L11.2002 4.89999C11.346 5.00693 11.4603 5.14305 11.5432 5.30832C11.6256 5.4736 11.6668 5.6486 11.6668 5.83332V11.0833C11.6668 11.4042 11.5527 11.6789 11.3244 11.9076C11.0957 12.1359 10.821 12.25 10.5002 12.25H3.50016ZM3.50016 11.0833H10.5002V5.83332L7.00016 3.20832L3.50016 5.83332V11.0833Z" fill="#EF4444"/>
                                                </g>
                                             </svg>
                                             12
                                          </span>
                                       </div>
                                    </div>
                                    <div class="single-alert">
                                       <h4>Requests - 2 <span>Cox's Bazar. Chittagong</span></h4>
                                       <div class="alert-countdown">
                                          <div class="room-search-timer color-orange" data-date="October 11, 2023 21:14:01">
                                             <span>
                                                <svg width="18" height="18" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <mask id="mask0_356_1664" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                      <rect width="18" height="18" fill="#D9D9D9"/>
                                                   </mask>
                                                   <g mask="url(#mask0_356_1664)">
                                                      <path d="M4.66683 11.6665H9.3335V9.9165C9.3335 9.27484 9.10502 8.72553 8.64808 8.26859C8.19113 7.81164 7.64183 7.58317 7.00016 7.58317C6.3585 7.58317 5.80919 7.81164 5.35225 8.26859C4.8953 8.72553 4.66683 9.27484 4.66683 9.9165V11.6665ZM11.0835 12.8332H2.91683C2.75155 12.8332 2.61291 12.7772 2.50091 12.6652C2.3893 12.5536 2.3335 12.4151 2.3335 12.2498C2.3335 12.0846 2.3893 11.9461 2.50091 11.8345C2.61291 11.7225 2.75155 11.6665 2.91683 11.6665H3.50016V9.9165C3.50016 9.32345 3.6388 8.76675 3.91608 8.24642C4.19297 7.72648 4.57933 7.31095 5.07516 6.99984C4.57933 6.68873 4.19297 6.273 3.91608 5.75267C3.6388 5.23273 3.50016 4.67623 3.50016 4.08317V2.33317H2.91683C2.75155 2.33317 2.61291 2.27717 2.50091 2.16517C2.3893 2.05356 2.3335 1.91512 2.3335 1.74984C2.3335 1.58456 2.3893 1.44592 2.50091 1.33392C2.61291 1.22231 2.75155 1.1665 2.91683 1.1665H11.0835C11.2488 1.1665 11.3872 1.22231 11.4988 1.33392C11.6108 1.44592 11.6668 1.58456 11.6668 1.74984C11.6668 1.91512 11.6108 2.05356 11.4988 2.16517C11.3872 2.27717 11.2488 2.33317 11.0835 2.33317H10.5002V4.08317C10.5002 4.67623 10.3617 5.23273 10.0848 5.75267C9.80755 6.273 9.421 6.68873 8.92516 6.99984C9.421 7.31095 9.80755 7.72648 10.0848 8.24642C10.3617 8.76675 10.5002 9.32345 10.5002 9.9165V11.6665H11.0835C11.2488 11.6665 11.3872 11.7225 11.4988 11.8345C11.6108 11.9461 11.6668 12.0846 11.6668 12.2498C11.6668 12.4151 11.6108 12.5536 11.4988 12.6652C11.3872 12.7772 11.2488 12.8332 11.0835 12.8332Z" fill="#F59E0B"/>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="days"></span>
                                             <span class="hours"></span>
                                             <span class="minutes"></span>
                                             <span class="seconds"></span>
                                          </div>
                                          <span class="number">
                                             <svg width="18" height="18" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1526_363" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                   <rect width="18" height="18" fill="#D9D9D9"/>
                                                </mask>
                                                <g mask="url(#mask0_1526_363)">
                                                   <path d="M7.00016 10.2083C7.16544 10.2083 7.30408 10.1523 7.41608 10.0403C7.52769 9.92871 7.5835 9.79027 7.5835 9.62499H6.41683C6.41683 9.79027 6.47283 9.92871 6.58483 10.0403C6.69644 10.1523 6.83488 10.2083 7.00016 10.2083ZM4.9585 9.33332H9.04183C9.11961 9.33332 9.18766 9.30416 9.246 9.24582C9.30433 9.18749 9.3335 9.11943 9.3335 9.04166C9.3335 8.96388 9.30433 8.89582 9.246 8.83749C9.18766 8.77916 9.11961 8.74999 9.04183 8.74999H8.75016V7.37916C8.75016 6.95138 8.6335 6.56249 8.40016 6.21249C8.16683 5.86249 7.846 5.63888 7.43766 5.54166V5.39582C7.43766 5.26943 7.39644 5.16482 7.314 5.08199C7.23116 4.99955 7.12655 4.95832 7.00016 4.95832C6.87377 4.95832 6.76936 4.99955 6.68691 5.08199C6.60408 5.16482 6.56266 5.26943 6.56266 5.39582V5.54166C6.15433 5.63888 5.8335 5.86249 5.60016 6.21249C5.36683 6.56249 5.25016 6.95138 5.25016 7.37916V8.74999H4.9585C4.88072 8.74999 4.81266 8.77916 4.75433 8.83749C4.696 8.89582 4.66683 8.96388 4.66683 9.04166C4.66683 9.11943 4.696 9.18749 4.75433 9.24582C4.81266 9.30416 4.88072 9.33332 4.9585 9.33332ZM3.50016 12.25C3.17933 12.25 2.90477 12.1359 2.6765 11.9076C2.44783 11.6789 2.3335 11.4042 2.3335 11.0833V5.83332C2.3335 5.6486 2.37491 5.4736 2.45775 5.30832C2.54019 5.14305 2.65433 5.00693 2.80016 4.89999L6.30016 2.27499C6.40711 2.19721 6.51891 2.13888 6.63558 2.09999C6.75225 2.0611 6.87377 2.04166 7.00016 2.04166C7.12655 2.04166 7.24808 2.0611 7.36475 2.09999C7.48141 2.13888 7.59322 2.19721 7.70016 2.27499L11.2002 4.89999C11.346 5.00693 11.4603 5.14305 11.5432 5.30832C11.6256 5.4736 11.6668 5.6486 11.6668 5.83332V11.0833C11.6668 11.4042 11.5527 11.6789 11.3244 11.9076C11.0957 12.1359 10.821 12.25 10.5002 12.25H3.50016ZM3.50016 11.0833H10.5002V5.83332L7.00016 3.20832L3.50016 5.83332V11.0833Z" fill="#64748B"/>
                                                </g>
                                             </svg>
                                             12
                                          </span>
                                       </div>
                                    </div>
                                    <div class="single-alert">
                                       <h4>Requests - 3 <span>Cox's Bazar. Chittagong</span></h4>
                                       <div class="alert-countdown">
                                          <div class="room-search-timer color-orange" data-date="November 22, 2023 21:14:01">
                                             <span>
                                                <svg width="18" height="18" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <mask id="mask0_356_1664" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                      <rect width="18" height="18" fill="#D9D9D9"/>
                                                   </mask>
                                                   <g mask="url(#mask0_356_1664)">
                                                      <path d="M4.66683 11.6665H9.3335V9.9165C9.3335 9.27484 9.10502 8.72553 8.64808 8.26859C8.19113 7.81164 7.64183 7.58317 7.00016 7.58317C6.3585 7.58317 5.80919 7.81164 5.35225 8.26859C4.8953 8.72553 4.66683 9.27484 4.66683 9.9165V11.6665ZM11.0835 12.8332H2.91683C2.75155 12.8332 2.61291 12.7772 2.50091 12.6652C2.3893 12.5536 2.3335 12.4151 2.3335 12.2498C2.3335 12.0846 2.3893 11.9461 2.50091 11.8345C2.61291 11.7225 2.75155 11.6665 2.91683 11.6665H3.50016V9.9165C3.50016 9.32345 3.6388 8.76675 3.91608 8.24642C4.19297 7.72648 4.57933 7.31095 5.07516 6.99984C4.57933 6.68873 4.19297 6.273 3.91608 5.75267C3.6388 5.23273 3.50016 4.67623 3.50016 4.08317V2.33317H2.91683C2.75155 2.33317 2.61291 2.27717 2.50091 2.16517C2.3893 2.05356 2.3335 1.91512 2.3335 1.74984C2.3335 1.58456 2.3893 1.44592 2.50091 1.33392C2.61291 1.22231 2.75155 1.1665 2.91683 1.1665H11.0835C11.2488 1.1665 11.3872 1.22231 11.4988 1.33392C11.6108 1.44592 11.6668 1.58456 11.6668 1.74984C11.6668 1.91512 11.6108 2.05356 11.4988 2.16517C11.3872 2.27717 11.2488 2.33317 11.0835 2.33317H10.5002V4.08317C10.5002 4.67623 10.3617 5.23273 10.0848 5.75267C9.80755 6.273 9.421 6.68873 8.92516 6.99984C9.421 7.31095 9.80755 7.72648 10.0848 8.24642C10.3617 8.76675 10.5002 9.32345 10.5002 9.9165V11.6665H11.0835C11.2488 11.6665 11.3872 11.7225 11.4988 11.8345C11.6108 11.9461 11.6668 12.0846 11.6668 12.2498C11.6668 12.4151 11.6108 12.5536 11.4988 12.6652C11.3872 12.7772 11.2488 12.8332 11.0835 12.8332Z" fill="#F59E0B"/>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="days"></span>
                                             <span class="hours"></span>
                                             <span class="minutes"></span>
                                             <span class="seconds"></span>
                                          </div>
                                          <span class="number">
                                             <svg width="18" height="18" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1526_363" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                   <rect width="18" height="18" fill="#D9D9D9"/>
                                                </mask>
                                                <g mask="url(#mask0_1526_363)">
                                                   <path d="M7.00016 10.2083C7.16544 10.2083 7.30408 10.1523 7.41608 10.0403C7.52769 9.92871 7.5835 9.79027 7.5835 9.62499H6.41683C6.41683 9.79027 6.47283 9.92871 6.58483 10.0403C6.69644 10.1523 6.83488 10.2083 7.00016 10.2083ZM4.9585 9.33332H9.04183C9.11961 9.33332 9.18766 9.30416 9.246 9.24582C9.30433 9.18749 9.3335 9.11943 9.3335 9.04166C9.3335 8.96388 9.30433 8.89582 9.246 8.83749C9.18766 8.77916 9.11961 8.74999 9.04183 8.74999H8.75016V7.37916C8.75016 6.95138 8.6335 6.56249 8.40016 6.21249C8.16683 5.86249 7.846 5.63888 7.43766 5.54166V5.39582C7.43766 5.26943 7.39644 5.16482 7.314 5.08199C7.23116 4.99955 7.12655 4.95832 7.00016 4.95832C6.87377 4.95832 6.76936 4.99955 6.68691 5.08199C6.60408 5.16482 6.56266 5.26943 6.56266 5.39582V5.54166C6.15433 5.63888 5.8335 5.86249 5.60016 6.21249C5.36683 6.56249 5.25016 6.95138 5.25016 7.37916V8.74999H4.9585C4.88072 8.74999 4.81266 8.77916 4.75433 8.83749C4.696 8.89582 4.66683 8.96388 4.66683 9.04166C4.66683 9.11943 4.696 9.18749 4.75433 9.24582C4.81266 9.30416 4.88072 9.33332 4.9585 9.33332ZM3.50016 12.25C3.17933 12.25 2.90477 12.1359 2.6765 11.9076C2.44783 11.6789 2.3335 11.4042 2.3335 11.0833V5.83332C2.3335 5.6486 2.37491 5.4736 2.45775 5.30832C2.54019 5.14305 2.65433 5.00693 2.80016 4.89999L6.30016 2.27499C6.40711 2.19721 6.51891 2.13888 6.63558 2.09999C6.75225 2.0611 6.87377 2.04166 7.00016 2.04166C7.12655 2.04166 7.24808 2.0611 7.36475 2.09999C7.48141 2.13888 7.59322 2.19721 7.70016 2.27499L11.2002 4.89999C11.346 5.00693 11.4603 5.14305 11.5432 5.30832C11.6256 5.4736 11.6668 5.6486 11.6668 5.83332V11.0833C11.6668 11.4042 11.5527 11.6789 11.3244 11.9076C11.0957 12.1359 10.821 12.25 10.5002 12.25H3.50016ZM3.50016 11.0833H10.5002V5.83332L7.00016 3.20832L3.50016 5.83332V11.0833Z" fill="#64748B"/>
                                                </g>
                                             </svg>
                                             12
                                          </span>
                                       </div>
                                    </div>
                                    <div class="single-alert">
                                       <h4>Requests - 4 <span>Cox's Bazar. Chittagong</span></h4>
                                       <div class="alert-countdown">
                                          <div class="room-search-timer color-red" data-date="November 22, 2023 21:14:01">
                                             <span>
                                                <svg width="18" height="18" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <mask id="mask0_356_1664" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                      <rect width="18" height="18" fill="#D9D9D9"/>
                                                   </mask>
                                                   <g mask="url(#mask0_356_1664)">
                                                      <path d="M4.66683 11.6665H9.3335V9.9165C9.3335 9.27484 9.10502 8.72553 8.64808 8.26859C8.19113 7.81164 7.64183 7.58317 7.00016 7.58317C6.3585 7.58317 5.80919 7.81164 5.35225 8.26859C4.8953 8.72553 4.66683 9.27484 4.66683 9.9165V11.6665ZM11.0835 12.8332H2.91683C2.75155 12.8332 2.61291 12.7772 2.50091 12.6652C2.3893 12.5536 2.3335 12.4151 2.3335 12.2498C2.3335 12.0846 2.3893 11.9461 2.50091 11.8345C2.61291 11.7225 2.75155 11.6665 2.91683 11.6665H3.50016V9.9165C3.50016 9.32345 3.6388 8.76675 3.91608 8.24642C4.19297 7.72648 4.57933 7.31095 5.07516 6.99984C4.57933 6.68873 4.19297 6.273 3.91608 5.75267C3.6388 5.23273 3.50016 4.67623 3.50016 4.08317V2.33317H2.91683C2.75155 2.33317 2.61291 2.27717 2.50091 2.16517C2.3893 2.05356 2.3335 1.91512 2.3335 1.74984C2.3335 1.58456 2.3893 1.44592 2.50091 1.33392C2.61291 1.22231 2.75155 1.1665 2.91683 1.1665H11.0835C11.2488 1.1665 11.3872 1.22231 11.4988 1.33392C11.6108 1.44592 11.6668 1.58456 11.6668 1.74984C11.6668 1.91512 11.6108 2.05356 11.4988 2.16517C11.3872 2.27717 11.2488 2.33317 11.0835 2.33317H10.5002V4.08317C10.5002 4.67623 10.3617 5.23273 10.0848 5.75267C9.80755 6.273 9.421 6.68873 8.92516 6.99984C9.421 7.31095 9.80755 7.72648 10.0848 8.24642C10.3617 8.76675 10.5002 9.32345 10.5002 9.9165V11.6665H11.0835C11.2488 11.6665 11.3872 11.7225 11.4988 11.8345C11.6108 11.9461 11.6668 12.0846 11.6668 12.2498C11.6668 12.4151 11.6108 12.5536 11.4988 12.6652C11.3872 12.7772 11.2488 12.8332 11.0835 12.8332Z" fill="#EF4444"/>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="days"></span>
                                             <span class="hours"></span>
                                             <span class="minutes"></span>
                                             <span class="seconds"></span>
                                          </div>
                                          <span class="number">
                                             <svg width="18" height="18" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1526_363" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                   <rect width="18" height="18" fill="#D9D9D9"/>
                                                </mask>
                                                <g mask="url(#mask0_1526_363)">
                                                   <path d="M7.00016 10.2083C7.16544 10.2083 7.30408 10.1523 7.41608 10.0403C7.52769 9.92871 7.5835 9.79027 7.5835 9.62499H6.41683C6.41683 9.79027 6.47283 9.92871 6.58483 10.0403C6.69644 10.1523 6.83488 10.2083 7.00016 10.2083ZM4.9585 9.33332H9.04183C9.11961 9.33332 9.18766 9.30416 9.246 9.24582C9.30433 9.18749 9.3335 9.11943 9.3335 9.04166C9.3335 8.96388 9.30433 8.89582 9.246 8.83749C9.18766 8.77916 9.11961 8.74999 9.04183 8.74999H8.75016V7.37916C8.75016 6.95138 8.6335 6.56249 8.40016 6.21249C8.16683 5.86249 7.846 5.63888 7.43766 5.54166V5.39582C7.43766 5.26943 7.39644 5.16482 7.314 5.08199C7.23116 4.99955 7.12655 4.95832 7.00016 4.95832C6.87377 4.95832 6.76936 4.99955 6.68691 5.08199C6.60408 5.16482 6.56266 5.26943 6.56266 5.39582V5.54166C6.15433 5.63888 5.8335 5.86249 5.60016 6.21249C5.36683 6.56249 5.25016 6.95138 5.25016 7.37916V8.74999H4.9585C4.88072 8.74999 4.81266 8.77916 4.75433 8.83749C4.696 8.89582 4.66683 8.96388 4.66683 9.04166C4.66683 9.11943 4.696 9.18749 4.75433 9.24582C4.81266 9.30416 4.88072 9.33332 4.9585 9.33332ZM3.50016 12.25C3.17933 12.25 2.90477 12.1359 2.6765 11.9076C2.44783 11.6789 2.3335 11.4042 2.3335 11.0833V5.83332C2.3335 5.6486 2.37491 5.4736 2.45775 5.30832C2.54019 5.14305 2.65433 5.00693 2.80016 4.89999L6.30016 2.27499C6.40711 2.19721 6.51891 2.13888 6.63558 2.09999C6.75225 2.0611 6.87377 2.04166 7.00016 2.04166C7.12655 2.04166 7.24808 2.0611 7.36475 2.09999C7.48141 2.13888 7.59322 2.19721 7.70016 2.27499L11.2002 4.89999C11.346 5.00693 11.4603 5.14305 11.5432 5.30832C11.6256 5.4736 11.6668 5.6486 11.6668 5.83332V11.0833C11.6668 11.4042 11.5527 11.6789 11.3244 11.9076C11.0957 12.1359 10.821 12.25 10.5002 12.25H3.50016ZM3.50016 11.0833H10.5002V5.83332L7.00016 3.20832L3.50016 5.83332V11.0833Z" fill="#64748B"/>
                                                </g>
                                             </svg>
                                             12
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                    <div class="single-alert active">
                                       <h4>Honeymoon Offer <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, magni?</span></h4>
                                    </div>
                                    <div class="single-alert">
                                       <h4>Honeymoon Offer <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, magni?</span></h4>
                                    </div>
                                    <div class="single-alert">
                                       <h4>Honeymoon Offer <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, magni?</span></h4>
                                    </div>
                                    <div class="single-alert">
                                       <h4>Honeymoon Offer <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, magni?</span></h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="btn-group header-right-profile">
                        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_1588_783" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
<rect y="0.5" width="24" height="24" fill="#D9D9D9"/>
</mask>
<g mask="url(#mask0_1588_783)">
<path d="M6.025 17.8C6.875 17.1667 7.8 16.6667 8.8 16.3C9.8 15.9333 10.8667 15.75 12 15.75C13.1333 15.75 14.2 15.9333 15.2 16.3C16.2 16.6667 17.125 17.1667 17.975 17.8C18.5917 17.1167 19.0833 16.325 19.45 15.425C19.8167 14.525 20 13.55 20 12.5C20 10.2833 19.221 8.39567 17.663 6.837C16.1043 5.279 14.2167 4.5 12 4.5C9.78333 4.5 7.896 5.279 6.338 6.837C4.77933 8.39567 4 10.2833 4 12.5C4 13.55 4.18333 14.525 4.55 15.425C4.91667 16.325 5.40833 17.1167 6.025 17.8ZM12 13.25C11.0833 13.25 10.3127 12.9373 9.688 12.312C9.06267 11.6873 8.75 10.9167 8.75 10C8.75 9.08333 9.06267 8.31267 9.688 7.688C10.3127 7.06267 11.0833 6.75 12 6.75C12.9167 6.75 13.6873 7.06267 14.312 7.688C14.9373 8.31267 15.25 9.08333 15.25 10C15.25 10.9167 14.9373 11.6873 14.312 12.312C13.6873 12.9373 12.9167 13.25 12 13.25ZM12 22C10.6833 22 9.446 21.75 8.288 21.25C7.12933 20.75 6.125 20.075 5.275 19.225C4.425 18.375 3.75 17.3707 3.25 16.212C2.75 15.054 2.5 13.8167 2.5 12.5C2.5 11.1833 2.75 9.94567 3.25 8.787C3.75 7.629 4.425 6.625 5.275 5.775C6.125 4.925 7.12933 4.25 8.288 3.75C9.446 3.25 10.6833 3 12 3C13.3167 3 14.5543 3.25 15.713 3.75C16.871 4.25 17.875 4.925 18.725 5.775C19.575 6.625 20.25 7.629 20.75 8.787C21.25 9.94567 21.5 11.1833 21.5 12.5C21.5 13.8167 21.25 15.054 20.75 16.212C20.25 17.3707 19.575 18.375 18.725 19.225C17.875 20.075 16.871 20.75 15.713 21.25C14.5543 21.75 13.3167 22 12 22ZM12 20.5C12.9 20.5 13.771 20.354 14.613 20.062C15.4543 19.7707 16.2 19.3667 16.85 18.85C16.2 18.35 15.4623 17.9583 14.637 17.675C13.8123 17.3917 12.9333 17.25 12 17.25C11.0667 17.25 10.1877 17.3877 9.363 17.663C8.53767 17.9377 7.8 18.3333 7.15 18.85C7.8 19.3667 8.54567 19.7707 9.387 20.062C10.229 20.354 11.1 20.5 12 20.5ZM12 11.75C12.5 11.75 12.9167 11.5833 13.25 11.25C13.5833 10.9167 13.75 10.5 13.75 10C13.75 9.5 13.5833 9.08333 13.25 8.75C12.9167 8.41667 12.5 8.25 12 8.25C11.5 8.25 11.0833 8.41667 10.75 8.75C10.4167 9.08333 10.25 9.5 10.25 10C10.25 10.5 10.4167 10.9167 10.75 11.25C11.0833 11.5833 11.5 11.75 12 11.75Z" fill="#14B8A6"/>
</g>
</svg>
 Sign In
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <section class="home-hero">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1>Plan Your Dream Trip In <span>Budget</span></h1>
                  <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
               </div>
               <div class="col-md-5 ms-auto">
                  <form action="" class="review-box-home">
                     <div class="review-input">
                        <div class="review-input-box full-box">  
                           <img src="assets/img/icons/icon-location-alt.svg" alt="">                          
                           <input type="text" placeholder="Cox's Bazar. Chittagong">
                        </div>
                     </div>
                     <div class="review-input">
                        <div class="review-input-box">
                           <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <mask id="mask0_281_1609" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                                 <rect y="0.5" width="24" height="24" fill="#D9D9D9"/>
                              </mask>
                              <g mask="url(#mask0_281_1609)">
                                 <path d="M17 22.5V19.5H14V17.5H17V14.5H19V17.5H22V19.5H19V22.5H17ZM5 20.5C4.45 20.5 3.979 20.3043 3.587 19.913C3.19567 19.521 3 19.05 3 18.5V6.5C3 5.95 3.19567 5.47933 3.587 5.088C3.979 4.696 4.45 4.5 5 4.5H6V2.5H8V4.5H14V2.5H16V4.5H17C17.55 4.5 18.021 4.696 18.413 5.088C18.8043 5.47933 19 5.95 19 6.5V12.6C18.6667 12.55 18.3333 12.525 18 12.525C17.6667 12.525 17.3333 12.55 17 12.6V10.5H5V18.5H12C12 18.8333 12.025 19.1667 12.075 19.5C12.125 19.8333 12.2167 20.1667 12.35 20.5H5ZM5 8.5H17V6.5H5V8.5Z" fill="#14B8A6"/>
                              </g>
                           </svg>
                           <input type="text" placeholder="Check In" class="date-picker">
                        </div>
                        <div class="review-input-box">
                           <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <mask id="mask0_281_1609" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                                 <rect y="0.5" width="24" height="24" fill="#D9D9D9"/>
                              </mask>
                              <g mask="url(#mask0_281_1609)">
                                 <path d="M17 22.5V19.5H14V17.5H17V14.5H19V17.5H22V19.5H19V22.5H17ZM5 20.5C4.45 20.5 3.979 20.3043 3.587 19.913C3.19567 19.521 3 19.05 3 18.5V6.5C3 5.95 3.19567 5.47933 3.587 5.088C3.979 4.696 4.45 4.5 5 4.5H6V2.5H8V4.5H14V2.5H16V4.5H17C17.55 4.5 18.021 4.696 18.413 5.088C18.8043 5.47933 19 5.95 19 6.5V12.6C18.6667 12.55 18.3333 12.525 18 12.525C17.6667 12.525 17.3333 12.55 17 12.6V10.5H5V18.5H12C12 18.8333 12.025 19.1667 12.075 19.5C12.125 19.8333 12.2167 20.1667 12.35 20.5H5ZM5 8.5H17V6.5H5V8.5Z" fill="#14B8A6"/>
                              </g>
                           </svg>
                           <input type="text" placeholder="Check Out" class="date-picker">
                        </div>
                     </div>
                     <div class="review-input">
                        <div class="review-input-box">  
                           <input type="number" placeholder="2 Adult">
                        </div>
                        <div class="review-input-box">
                           <input type="number" placeholder="0 Child">
                        </div>
                        <div class="review-input-box">
                           <input type="number" placeholder="1 Room">
                        </div>
                     </div>
                     <div class="review-input">
                        <input type="submit" value="Request Booking" class="btn btn-bg">
                        <input type="submit" value="Search Result" class="btn btn-border">
                     </div>
                  </form>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h4>Choose Your Destination</h4>
               </div>
            </div>
         </div>
      </section>
      <section class="bannar">
         <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner bannar-inner">
               <div class="carousel-item bannar-item active" style="background-image:url('./assets/img/home/sliders/slide-3.jpg')">
                  <div class="carousel-caption bannar-caption">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="bannar-content">
                                 <h4><img src="assets/img/home/sliders/slider-icon-beach.svg" alt=""> Cox's Bazar. <br> Chittagong</h4>
                                 <p>Cox’s Bazar is a District under Chittagong Division, which is famous for its longest unbroken sandy sea beach. It is located 150 km south of the industrial port- Chittagong. Cox’s Bazar is considered as having the longest sea beach in the world, with a total of 121 kilometer long.</p>
                                 <a href="" class="btn-border">Explore Hotels</a>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="bannar-img">
                                 <img src="assets/img/home/sliders/slide-small-1.svg" alt="...">
                              </div>
                           </div>
                           <div class="col-md-1">
                           <svg width="2" height="125" viewBox="0 0 2 125" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="1" y1="1" x2="1.00001" y2="124" stroke="#2DD4BF" stroke-width="2" stroke-linecap="round" stroke-dasharray="8 8"/>
</svg>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item bannar-item" style="background-image:url('./assets/img/home/sliders/slide-2.jpg')">
                  <div class="carousel-caption bannar-caption">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="bannar-content">
                                 <h4><img src="assets/img/home/sliders/slider-icon-beach.svg" alt=""> Cox's Bazar. <br> Chittagong</h4>
                                 <p>Cox’s Bazar is a District under Chittagong Division, which is famous for its longest unbroken sandy sea beach. It is located 150 km south of the industrial port- Chittagong. Cox’s Bazar is considered as having the longest sea beach in the world, with a total of 121 kilometer long.</p>
                                 <a href="" class="btn-border">Explore Hotels</a>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="bannar-img">
                                 <img src="assets/img/home/sliders/slide-small-2.svg" alt="...">
                              </div>
                           </div>
                           <div class="col-md-1">
                           <svg width="2" height="125" viewBox="0 0 2 125" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="1" y1="1" x2="1.00001" y2="124" stroke="#2DD4BF" stroke-width="2" stroke-linecap="round" stroke-dasharray="8 8"/>
</svg>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item bannar-item" style="background-image:url('./assets/img/home/sliders/slide-3.jpg')">
                  <div class="carousel-caption bannar-caption">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="bannar-content">
                                 <h4><img src="assets/img/home/sliders/slider-icon-beach.svg" alt=""> Cox's Bazar. <br> Chittagong</h4>
                                 <p>Cox’s Bazar is a District under Chittagong Division, which is famous for its longest unbroken sandy sea beach. It is located 150 km south of the industrial port- Chittagong. Cox’s Bazar is considered as having the longest sea beach in the world, with a total of 121 kilometer long.</p>
                                 <a href="" class="btn-border">Explore Hotels</a>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="bannar-img">
                                 <img src="assets/img/home/sliders/slide-small-3.svg" alt="...">
                              </div>
                           </div>
                           <div class="col-md-1">
                           <svg width="2" height="125" viewBox="0 0 2 125" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="1" y1="1" x2="1.00001" y2="124" stroke="#2DD4BF" stroke-width="2" stroke-linecap="round" stroke-dasharray="8 8"/>
</svg>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>    
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true">
                  <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <mask id="mask0_1588_1422" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="64" height="64">
                        <rect width="64" height="64" fill="#D9D9D9"/>
                     </mask>
                     <g mask="url(#mask0_1588_1422)">
                        <path d="M31.1333 39.8667C31.3556 40.1333 31.656 40.2551 32.0347 40.232C32.4116 40.2107 32.7111 40.0667 32.9333 39.8C33.2 39.5778 33.3333 39.2773 33.3333 38.8987C33.3333 38.5218 33.2 38.2222 32.9333 38L28.2667 33.3333H40.0667C40.4222 33.3333 40.7227 33.2 40.968 32.9333C41.2116 32.6667 41.3333 32.3556 41.3333 32C41.3333 31.6 41.2116 31.2773 40.968 31.032C40.7227 30.7884 40.4 30.6667 40 30.6667H28.2667L32.9333 25.9333C33.2 25.7111 33.3227 25.4107 33.3013 25.032C33.2782 24.6551 33.1333 24.3556 32.8667 24.1333C32.6444 23.8667 32.3449 23.7333 31.968 23.7333C31.5893 23.7333 31.2889 23.8667 31.0667 24.1333L24.7333 30.4667C24.2889 30.9111 24.0667 31.4222 24.0667 32C24.0667 32.5778 24.2889 33.0889 24.7333 33.5333L31.1333 39.8667ZM32 56C28.6667 56 25.5449 55.3671 22.6347 54.1013C19.7227 52.8338 17.1893 51.1218 15.0347 48.9653C12.8782 46.8107 11.1662 44.2773 9.89867 41.3653C8.63289 38.4551 8 35.3333 8 32C8 28.6667 8.63289 25.544 9.89867 22.632C11.1662 19.7218 12.8782 17.1884 15.0347 15.032C17.1893 12.8773 19.7227 11.1662 22.6347 9.89867C25.5449 8.63289 28.6667 8 32 8C35.3333 8 38.456 8.63289 41.368 9.89867C44.2782 11.1662 46.8116 12.8773 48.968 15.032C51.1227 17.1884 52.8338 19.7218 54.1013 22.632C55.3671 25.544 56 28.6667 56 32C56 35.3333 55.3671 38.4551 54.1013 41.3653C52.8338 44.2773 51.1227 46.8107 48.968 48.9653C46.8116 51.1218 44.2782 52.8338 41.368 54.1013C38.456 55.3671 35.3333 56 32 56ZM32 53.3333C37.9111 53.3333 42.9449 51.256 47.1013 47.1013C51.256 42.9449 53.3333 37.9111 53.3333 32C53.3333 26.0889 51.256 21.0551 47.1013 16.8987C42.9449 12.744 37.9111 10.6667 32 10.6667C26.0889 10.6667 21.056 12.744 16.9013 16.8987C12.7449 21.0551 10.6667 26.0889 10.6667 32C10.6667 37.9111 12.7449 42.9449 16.9013 47.1013C21.056 51.256 26.0889 53.3333 32 53.3333Z" fill="#fff"/>
                     </g>
                  </svg>
               </span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true">
                  <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <mask id="mask0_1588_1419" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="64" height="64">
                        <rect width="64" height="64" fill="#D9D9D9"/>
                     </mask>
                     <g mask="url(#mask0_1588_1419)">
                        <path d="M32.9333 39.8L39.2667 33.5333C39.7111 33.0889 39.9333 32.5778 39.9333 32C39.9333 31.4222 39.7111 30.9111 39.2667 30.4667L32.8667 24.1333C32.6444 23.8667 32.3556 23.7333 32 23.7333C31.6444 23.7333 31.3556 23.8667 31.1333 24.1333C30.8667 24.3556 30.7333 24.6551 30.7333 25.032C30.7333 25.4107 30.8667 25.7111 31.1333 25.9333L35.7333 30.6667H23.9333C23.5778 30.6667 23.2773 30.8 23.032 31.0667C22.7884 31.3333 22.6667 31.6444 22.6667 32C22.6667 32.4 22.7884 32.7227 23.032 32.968C23.2773 33.2116 23.6 33.3333 24 33.3333H35.7333L31.0667 38.0667C30.8 38.2889 30.6773 38.5778 30.6987 38.9333C30.7218 39.2889 30.8667 39.5778 31.1333 39.8C31.3556 40.0667 31.656 40.2 32.0347 40.2C32.4116 40.2 32.7111 40.0667 32.9333 39.8ZM32 56C28.6667 56 25.5449 55.3671 22.6347 54.1013C19.7227 52.8338 17.1893 51.1218 15.0347 48.9653C12.8782 46.8107 11.1662 44.2773 9.89867 41.3653C8.63289 38.4551 8 35.3333 8 32C8 28.6667 8.63289 25.544 9.89867 22.632C11.1662 19.7218 12.8782 17.1884 15.0347 15.032C17.1893 12.8773 19.7227 11.1662 22.6347 9.89867C25.5449 8.63289 28.6667 8 32 8C35.3333 8 38.456 8.63289 41.368 9.89867C44.2782 11.1662 46.8116 12.8773 48.968 15.032C51.1227 17.1884 52.8338 19.7218 54.1013 22.632C55.3671 25.544 56 28.6667 56 32C56 35.3333 55.3671 38.4551 54.1013 41.3653C52.8338 44.2773 51.1227 46.8107 48.968 48.9653C46.8116 51.1218 44.2782 52.8338 41.368 54.1013C38.456 55.3671 35.3333 56 32 56ZM32 53.3333C37.9111 53.3333 42.9449 51.256 47.1013 47.1013C51.256 42.9449 53.3333 37.9111 53.3333 32C53.3333 26.0889 51.256 21.0551 47.1013 16.8987C42.9449 12.744 37.9111 10.6667 32 10.6667C26.0889 10.6667 21.056 12.744 16.9013 16.8987C12.7449 21.0551 10.6667 26.0889 10.6667 32C10.6667 37.9111 12.7449 42.9449 16.9013 47.1013C21.056 51.256 26.0889 53.3333 32 53.3333Z" fill="white"/>
                     </g>
                  </svg>
               </span>
            </button>
            <div class="carousel-indicators carousel-indicators-numbers">
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">01</button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2">02</button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3">/ 03</button>
            </div>
            </div>
            <div class="num"></div>
            
         </div>
      </section>
      <section class="promo position-relative">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="promo-content">
                     <h4>Hotel Booking Within Your Budget Is Never Been <span>Easier</span></h4>
                     <p>Pickup your phone today, and install our mobile app. After that, just one click away to find your dream hotel to your destination within your budget</p>
                     <div class="promo-img">
                        <img src="assets/img/home/home-qr-code.svg" alt="">
                        <div class="promo-img-right">
                           <a href=""><img src="assets/img/home/google-play-badge.svg" alt=""></a>
                           <a href=""><img src="assets/img/home/apple-play-store.svg" alt=""></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                  <img src="assets/img/home/home-promo.png" alt="">
               </div>
            </div>
         </div>
      </section>
      <section class="features">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <div class="feature-section-title">
                     <h4>You Have The App. Now What? </h4>
                     <p>Let us walk you through this 4 simple steps to find the perfect hotel to your destination with your budget</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 mx-auto">
                  <div class="row align-items-center">
                     <div class="col-md-7">
                        <div class="single-feature d-flex align-items-center">
                           <span>
                           <img src="assets/img/icons/feature-number-1.png" alt="">
                           </span>
                           <div class="single-feature-content">
                              <h4>Register</h4>
                              <p>Simply provide your correct information in the registration and <a href="">get registered</a> to the app.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <img src="assets/img//icons/feature-icon-1.png" alt="" class="single-feature-img">
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-5">
                        <img src="assets/img//icons/feature-icon-2.png" alt="" class="single-feature-img">
                     </div>
                     <div class="col-md-7">
                        <div class="single-feature d-flex align-items-center">
                           <span>
                           <img src="assets/img/icons/feature-number-2.png" alt="">
                           </span>
                           <div class="single-feature-content">
                              <h4>Set your destination</h4>
                              <p>Set you destination, number your traveler and your <a href="">Budget</a> in the search box and request a booking.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-7">
                        <div class="single-feature d-flex align-items-center">
                           <span>
                           <img src="assets/img/icons/feature-number-3.png" alt="">
                           </span>
                           <div class="single-feature-content">
                              <h4>Chose From Responce</h4>
                              <p>Very shortly you will start to <a href="">get notification</a> from hotel & resorts with best available rooms within your set budget.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <img src="assets/img//icons/feature-icon-3.png" alt="" class="single-feature-img">
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-5">
                        <img src="assets/img//icons/feature-icon-4.png" alt="" class="single-feature-img">
                     </div>
                     <div class="col-md-7">
                        <div class="single-feature d-flex align-items-center">
                           <span>
                           <img src="assets/img/icons/feature-number-4.png" alt="">
                           </span>
                           <div class="single-feature-content">
                              <h4>Book Your Room</h4>
                              <p>Now just chose from the offers that matches your requirements <a href="">with in 6 hours</a> and book the room.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-12 text-center">
                        <div class="features-btn">
                           <a href="" class="btn btn-border">
                           Request Booking Now
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="rooms">
         <div class="container">
            <div class="row align-items-center rooms-title">
               <div class="col-md-5">
                  <h4>Here Is Our <span>Best Rated</span><br> Picks For Your Next <br> Trip Plan</h4>
               </div>
               <div class="col-md-7">
                  <p>Every month our system sort the hotels and as per best rating and show the list for you. So, that you can plan the best trip</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="single-room">
                     <div class="room-image" style="background-image:url('assets/img/rooms/room1.png')"></div>
                     <div class="room-content">
                        <h4>Leonardo Hotel Barcelona Gran Via <span>Cox’s Bazar, Chittagong</span></h4>
                        <div class="room-feature d-flex justify-content-between align-items-center">
                           <div class="room-icon">
                              <img src="assets/img/icons/icon-home-welcome-drink.png" alt="">
                              <img src="assets/img/icons/icon-home-air-condiitoner.png" alt="">
                              <img src="assets/img/icons/icon-home-tea.png" alt="">
                              <img src="assets/img/icons/icon-home-swimming.png" alt="">
                              <img src="assets/img/icons/icon-home-wifi.png" alt="">
                              <img src="assets/img/icons/icon-home-breakfast.png" alt="">
                           </div>
                           <div class="room-rating d-flex align-items-center">
                              <img src="assets/img/icons/icon-star.png" alt=""> 4.8
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-room">
                     <div class="room-image" style="background-image:url('assets/img/rooms/room2.png')"></div>
                     <div class="room-content">
                        <h4>Leonardo Hotel Barcelona Gran Via <span>Cox’s Bazar, Chittagong</span></h4>
                        <div class="room-feature d-flex justify-content-between align-items-center">
                           <div class="room-icon">
                              <img src="assets/img/icons/icon-home-welcome-drink.png" alt="">
                              <img src="assets/img/icons/icon-home-air-condiitoner.png" alt="">
                              <img src="assets/img/icons/icon-home-tea.png" alt="">
                              <img src="assets/img/icons/icon-home-swimming.png" alt="">
                              <img src="assets/img/icons/icon-home-wifi.png" alt="">
                              <img src="assets/img/icons/icon-home-breakfast.png" alt="">
                           </div>
                           <div class="room-rating d-flex align-items-center">
                              <img src="assets/img/icons/icon-star.png" alt=""> 4.8
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-room">
                     <div class="room-image" style="background-image:url('assets/img/rooms/room3.png')"></div>
                     <div class="room-content">
                        <h4>Leonardo Hotel Barcelona Gran Via <span>Cox’s Bazar, Chittagong</span></h4>
                        <div class="room-feature d-flex justify-content-between align-items-center">
                           <div class="room-icon">
                              <img src="assets/img/icons/icon-home-welcome-drink.png" alt="">
                              <img src="assets/img/icons/icon-home-air-condiitoner.png" alt="">
                              <img src="assets/img/icons/icon-home-tea.png" alt="">
                              <img src="assets/img/icons/icon-home-swimming.png" alt="">
                              <img src="assets/img/icons/icon-home-wifi.png" alt="">
                              <img src="assets/img/icons/icon-home-breakfast.png" alt="">
                           </div>
                           <div class="room-rating d-flex align-items-center">
                              <img src="assets/img/icons/icon-star.png" alt=""> 4.8
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-room">
                     <div class="room-image" style="background-image:url('assets/img/rooms/room4.png')"></div>
                     <div class="room-content">
                        <h4>Leonardo Hotel Barcelona Gran Via <span>Cox’s Bazar, Chittagong</span></h4>
                        <div class="room-feature d-flex justify-content-between align-items-center">
                           <div class="room-icon">
                              <img src="assets/img/icons/icon-home-welcome-drink.png" alt="">
                              <img src="assets/img/icons/icon-home-air-condiitoner.png" alt="">
                              <img src="assets/img/icons/icon-home-tea.png" alt="">
                              <img src="assets/img/icons/icon-home-swimming.png" alt="">
                              <img src="assets/img/icons/icon-home-wifi.png" alt="">
                              <img src="assets/img/icons/icon-home-breakfast.png" alt="">
                           </div>
                           <div class="room-rating d-flex align-items-center">
                              <img src="assets/img/icons/icon-star.png" alt=""> 4.8
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-room">
                     <div class="room-image" style="background-image:url('assets/img/rooms/room5.png')"></div>
                     <div class="room-content">
                        <h4>Leonardo Hotel Barcelona Gran Via <span>Cox’s Bazar, Chittagong</span></h4>
                        <div class="room-feature d-flex justify-content-between align-items-center">
                           <div class="room-icon">
                              <img src="assets/img/icons/icon-home-welcome-drink.png" alt="">
                              <img src="assets/img/icons/icon-home-air-condiitoner.png" alt="">
                              <img src="assets/img/icons/icon-home-tea.png" alt="">
                              <img src="assets/img/icons/icon-home-swimming.png" alt="">
                              <img src="assets/img/icons/icon-home-wifi.png" alt="">
                              <img src="assets/img/icons/icon-home-breakfast.png" alt="">
                           </div>
                           <div class="room-rating d-flex align-items-center">
                              <img src="assets/img/icons/icon-star.png" alt=""> 4.8
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-room">
                     <div class="room-image" style="background-image:url('assets/img/rooms/room6.png')"></div>
                     <div class="room-content">
                        <h4>Leonardo Hotel Barcelona Gran Via <span>Cox’s Bazar, Chittagong</span></h4>
                        <div class="room-feature d-flex justify-content-between align-items-center">
                           <div class="room-icon">
                              <img src="assets/img/icons/icon-home-welcome-drink.png" alt="">
                              <img src="assets/img/icons/icon-home-air-condiitoner.png" alt="">
                              <img src="assets/img/icons/icon-home-tea.png" alt="">
                              <img src="assets/img/icons/icon-home-swimming.png" alt="">
                              <img src="assets/img/icons/icon-home-wifi.png" alt="">
                              <img src="assets/img/icons/icon-home-breakfast.png" alt="">
                           </div>
                           <div class="room-rating d-flex align-items-center">
                              <img src="assets/img/icons/icon-star.png" alt=""> 4.8
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-room">
                     <div class="room-image" style="background-image:url('assets/img/rooms/room7.png')"></div>
                     <div class="room-content">
                        <h4>Leonardo Hotel Barcelona Gran Via <span>Cox’s Bazar, Chittagong</span></h4>
                        <div class="room-feature d-flex justify-content-between align-items-center">
                           <div class="room-icon">
                              <img src="assets/img/icons/icon-home-welcome-drink.png" alt="">
                              <img src="assets/img/icons/icon-home-air-condiitoner.png" alt="">
                              <img src="assets/img/icons/icon-home-tea.png" alt="">
                              <img src="assets/img/icons/icon-home-swimming.png" alt="">
                              <img src="assets/img/icons/icon-home-wifi.png" alt="">
                              <img src="assets/img/icons/icon-home-breakfast.png" alt="">
                           </div>
                           <div class="room-rating d-flex align-items-center">
                              <img src="assets/img/icons/icon-star.png" alt=""> 4.8
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-room">
                     <div class="room-image" style="background-image:url('assets/img/rooms/room8.png')"></div>
                     <div class="room-content">
                        <h4>Leonardo Hotel Barcelona Gran Via <span>Cox’s Bazar, Chittagong</span></h4>
                        <div class="room-feature d-flex justify-content-between align-items-center">
                           <div class="room-icon">
                              <img src="assets/img/icons/icon-home-welcome-drink.png" alt="">
                              <img src="assets/img/icons/icon-home-air-condiitoner.png" alt="">
                              <img src="assets/img/icons/icon-home-tea.png" alt="">
                              <img src="assets/img/icons/icon-home-swimming.png" alt="">
                              <img src="assets/img/icons/icon-home-wifi.png" alt="">
                              <img src="assets/img/icons/icon-home-breakfast.png" alt="">
                           </div>
                           <div class="room-rating d-flex align-items-center">
                              <img src="assets/img/icons/icon-star.png" alt=""> 4.8
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-room">
                     <div class="room-image" style="background-image:url('assets/img/rooms/room9.png')"></div>
                     <div class="room-content">
                        <h4>Leonardo Hotel Barcelona Gran Via <span>Cox’s Bazar, Chittagong</span></h4>
                        <div class="room-feature d-flex justify-content-between align-items-center">
                           <div class="room-icon">
                              <img src="assets/img/icons/icon-home-welcome-drink.png" alt="">
                              <img src="assets/img/icons/icon-home-air-condiitoner.png" alt="">
                              <img src="assets/img/icons/icon-home-tea.png" alt="">
                              <img src="assets/img/icons/icon-home-swimming.png" alt="">
                              <img src="assets/img/icons/icon-home-wifi.png" alt="">
                              <img src="assets/img/icons/icon-home-breakfast.png" alt="">
                           </div>
                           <div class="room-rating d-flex align-items-center">
                              <img src="assets/img/icons/icon-star.png" alt=""> 4.8
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-center">
                  <div class="room-list-btn position-relative">
                     <a href="" class="btn btn-border">
                     See All Top Rated Rooms
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="subscribe">
         <div class="container">
            <div class="col-md-10 mx-auto text-center">
               <h4>Be Up To Date With Our Best Deals, Offer & Recommendation</h4>
               <form action="">
                  <div class="subscribe-group">
                     <img class="icon-envelope" src="assets/img/icons/envelope.png" alt="">
                     <input type="email" name="" id="" placeholder="enter your email here">
                     <img class="icon-close" src="assets/img/icons/close.png" alt="">
                  </div>
                  <div class="subscribe-check">
                     <input type="checkbox" class="form-check-input">
                     <label class="form-check-label">Check this is agree with our <a href="">terms</a> & <a href="">conditions</a></label>
                  </div>
                  <input type="submit" value="Subscribe Now">
               </form>
            </div>
         </div>
      </section>
      <?php include 'inc/footer.php'; ?>
