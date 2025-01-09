<?php
/**
 * Footer template for the theme.
 */
?>
<footer data-v-c59813ef="" aria-modal="true">
   <div class="footer-section2" data-v-c59813ef="">
      <div class="text" style="margin-top: 96px">
         <img 
         id="site-logo" 
         width="132" 
         style="max-width: 100%; height: auto; width: 175px;" 
         src="<?php 
            $custom_logo_id = get_theme_mod('custom_logo'); 
            if ($custom_logo_id) {
                  $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                  echo esc_url($logo_url);
            } else {
                  echo esc_url(get_template_directory_uri() . '/assets/images/default-logo.png'); // Ruta a un logo predeterminado
            }
         ?>" 
         alt="Site Logo">
         <p style="margin-top: 32px">WoodXEL has grown into a reliable brand known for its seamless customization, exceptional quality, and dual-purpose designs that improve. Reliable brand known for its seamless customization, exceptional quality, and dual-purpose. Quality, and dual-purpose designs that improve. Reliable brand known.</p>
      </div>  
      <a href="/blog" class="" data-v-c59813ef=""> BLOG </a>
      <a href="/contact" class="" data-v-c59813ef=""> CONTACT US </a>
      <a href="/terms" class="" data-v-c59813ef=""> TERMS OF USE </a>
      <a href="/privacy" class="" data-v-c59813ef=""> PRIVACY POLICY </a>
      <div class="section2-icons" data-v-c59813ef="">
         <svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-c59813ef="">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 0.5C6.93923 0.5 0 7.43923 0 16C0 24.5608 6.93923 31.5 15.5 31.5C24.0608 31.5 31 24.5608 31 16C31 7.43923 24.0608 0.5 15.5 0.5ZM2.38462 16C2.38549 13.2368 3.25908 10.5444 4.88074 8.3071C6.50239 6.06978 8.78926 4.4018 11.415 3.54115C14.0408 2.68051 16.8713 2.67118 19.5027 3.51449C22.1341 4.35781 24.4319 6.01068 26.0683 8.23726C27.7047 10.4638 28.596 13.1504 28.6151 15.9135C28.6342 18.6767 27.7801 21.3753 26.1746 23.6243C24.5692 25.8733 22.2944 27.5577 19.6749 28.4373C17.0554 29.3169 14.2251 29.3467 11.5876 28.5224C12.2595 27.4671 12.7938 26.3302 13.1774 25.1394L13.9977 21.9965C14.3369 22.4808 14.7918 22.8726 15.321 23.1363C15.8502 23.4001 16.4368 23.5274 17.0277 23.5068C21.0577 23.5068 23.8907 19.844 23.8907 15.2942C23.8907 10.9239 20.3217 7.65862 15.7448 7.65862C10.0424 7.65862 7.01395 11.4899 7.01395 15.6534C7.01395 17.5977 8.04251 20.0046 9.69426 20.7788C9.93908 20.8916 10.0996 20.7788 10.1378 20.5991C10.1759 20.4195 10.4017 19.5149 10.505 19.0984C10.521 19.0327 10.5209 18.9641 10.5045 18.8985C10.4882 18.8329 10.4562 18.7722 10.4112 18.7216C9.78705 17.8426 9.45655 16.7888 9.46692 15.7107C9.46362 14.9367 9.61742 14.1702 9.91901 13.4574C10.2206 12.7446 10.6637 12.1005 11.2215 11.5639C11.7793 11.0274 12.4402 10.6096 13.1641 10.3359C13.888 10.0623 14.66 9.93834 15.4332 9.97169C16.1573 9.92933 16.8823 10.0384 17.5619 10.2918C18.2415 10.5453 18.8608 10.9377 19.3803 11.4438C19.8998 11.95 20.3081 12.5589 20.5791 13.2317C20.8501 13.9045 20.978 14.6264 20.9544 15.3514C20.9544 18.9188 19.1421 21.4019 16.802 21.4019C16.4997 21.425 16.1962 21.3749 15.9174 21.2559C15.6385 21.1369 15.3924 20.9525 15.1998 20.7183C15.0072 20.4841 14.8739 20.2069 14.811 19.9103C14.7482 19.6137 14.7577 19.3063 14.8387 19.0142C14.9722 18.4577 15.1503 17.8838 15.3219 17.3243C15.6351 16.31 15.934 15.345 15.934 14.6153C15.9665 14.3781 15.9474 14.1367 15.8781 13.9075C15.8087 13.6784 15.6906 13.4669 15.532 13.2876C15.3733 13.1083 15.1779 12.9653 14.9589 12.8685C14.7399 12.7717 14.5026 12.7234 14.2632 12.7267C12.9405 12.7267 11.8738 14.105 11.8738 15.9364C11.8643 16.5834 11.9851 17.2257 12.2331 17.825L10.6751 24.432C10.4847 25.6807 10.4847 26.951 10.6751 28.1997C9.64838 27.7928 8.67727 27.2576 7.78497 26.6068C5.59446 25.007 3.94934 22.7719 3.07297 20.2049C2.61558 18.8502 2.38305 17.4298 2.38462 16Z" fill="#2C2C2C"></path>
         </svg>
         <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-c59813ef="">
            <g clip-path="url(#clip0_1921_12462)">
               <path d="M16 2.88368C20.2747 2.88368 20.7765 2.90274 22.4661 2.97896C24.0286 3.04883 24.8734 3.30925 25.4387 3.53156C26.1882 3.82374 26.7217 4.16673 27.2807 4.72569C27.8396 5.28464 28.189 5.81818 28.4748 6.56769C28.6908 7.13299 28.9575 7.97777 29.0274 9.54029C29.1036 11.2299 29.1227 11.7316 29.1227 16.0064C29.1227 20.2811 29.1036 20.7829 29.0274 22.4724C28.9575 24.0349 28.6971 24.8797 28.4748 25.445C28.1826 26.1945 27.8396 26.7281 27.2807 27.287C26.7217 27.846 26.1882 28.1953 25.4387 28.4811C24.8734 28.6971 24.0286 28.9639 22.4661 29.0337C20.7765 29.11 20.2747 29.129 16 29.129C11.7253 29.129 11.2235 29.11 9.53395 29.0337C7.97142 28.9639 7.12664 28.7035 6.56134 28.4811C5.81183 28.189 5.27829 27.846 4.71934 27.287C4.16038 26.7281 3.81104 26.1945 3.52521 25.445C3.30925 24.8797 3.04248 24.0349 2.97261 22.4724C2.89639 20.7829 2.87733 20.2811 2.87733 16.0064C2.87733 11.7316 2.89639 11.2299 2.97261 9.54029C3.04248 7.97777 3.3029 7.13299 3.52521 6.56769C3.81739 5.81818 4.16038 5.28464 4.71934 4.72569C5.27829 4.16673 5.81183 3.81739 6.56134 3.53156C7.12664 3.3156 7.97142 3.04883 9.53395 2.97896C11.2235 2.89639 11.7316 2.88368 16 2.88368ZM16 0C11.6554 0 11.1092 0.0190552 9.40056 0.0952759C7.6983 0.171497 6.53593 0.444621 5.51965 0.838428C4.46527 1.24494 3.57602 1.79754 2.68678 2.68678C1.79754 3.57602 1.25129 4.47162 0.838428 5.51965C0.444621 6.53593 0.171497 7.69829 0.095276 9.40691C0.0190552 11.1092 0 11.6554 0 16C0 20.3446 0.0190552 20.8908 0.095276 22.5994C0.171497 24.3017 0.444621 25.4641 0.838428 26.4867C1.24494 27.5411 1.79754 28.4303 2.68678 29.3196C3.57602 30.2088 4.47162 30.7551 5.51965 31.1679C6.53593 31.5617 7.6983 31.8349 9.40691 31.9111C11.1155 31.9873 11.6554 32.0064 16.0064 32.0064C20.3573 32.0064 20.8972 31.9873 22.6058 31.9111C24.3081 31.8349 25.4704 31.5617 26.4931 31.1679C27.5475 30.7614 28.4367 30.2088 29.3259 29.3196C30.2152 28.4303 30.7614 27.5347 31.1743 26.4867C31.5681 25.4704 31.8412 24.3081 31.9174 22.5994C31.9937 20.8908 32.0127 20.3509 32.0127 16C32.0127 11.6491 31.9937 11.1092 31.9174 9.40056C31.8412 7.69829 31.5681 6.53593 31.1743 5.5133C30.7678 4.45891 30.2152 3.56967 29.3259 2.68043C28.4367 1.79119 27.5411 1.24494 26.4931 0.832076C25.4768 0.438269 24.3144 0.165145 22.6058 0.0889242C20.8908 0.0190552 20.3446 0 16 0Z" fill="#2C2C2C"></path>
               <path d="M16.0004 7.79102C11.4653 7.79102 7.78125 11.4687 7.78125 16.0101C7.78125 20.5516 11.4589 24.2293 16.0004 24.2293C20.5419 24.2293 24.2195 20.5516 24.2195 16.0101C24.2195 11.4687 20.5419 7.79102 16.0004 7.79102ZM16.0004 21.3392C13.0532 21.3392 10.6649 18.951 10.6649 16.0038C10.6649 13.0566 13.0532 10.6683 16.0004 10.6683C18.9476 10.6683 21.3358 13.0566 21.3358 16.0038C21.3358 18.951 18.9476 21.3392 16.0004 21.3392Z" fill="#2C2C2C"></path>
               <path d="M24.5432 9.37746C25.6026 9.37746 26.4614 8.51864 26.4614 7.45924C26.4614 6.39983 25.6026 5.54102 24.5432 5.54102C23.4838 5.54102 22.625 6.39983 22.625 7.45924C22.625 8.51864 23.4838 9.37746 24.5432 9.37746Z" fill="#2C2C2C"></path>
            </g>
            <defs>
               <clipPath id="clip0_1921_12462">
                  <rect width="32" height="32" fill="white"></rect>
               </clipPath>
            </defs>
         </svg>
         <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-c59813ef="">
            <path d="M23.2875 17.7697L24.1168 12.3095H18.9295V8.76776C18.9295 7.27359 19.6528 5.8163 21.9761 5.8163H24.3359V1.16776C24.3359 1.16776 22.1953 0.798828 20.1496 0.798828C15.8757 0.798828 13.0848 3.41456 13.0848 8.14795V12.3095H8.33594V17.7697H13.0848V30.9701C14.0382 31.1214 15.0136 31.1988 16.0072 31.1988C17.0008 31.1988 17.9761 31.1214 18.9295 30.9701V17.7697H23.2875Z" fill="#2C2C2C"></path>
         </svg>
      </div>
   </div>
   <div class="footer-section footer-section-column-1" data-v-c59813ef="">
      <img 
      id="site-logo" 
      width="132" 
      style="max-width: 100%; height: auto; width: 175px;" 
      src="<?php 
         $custom_logo_id = get_theme_mod('custom_logo'); 
         if ($custom_logo_id) {
               $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
               echo esc_url($logo_url);
         } else {
               echo esc_url(get_template_directory_uri() . '/assets/images/default-logo.png'); // Ruta a un logo predeterminado
         }
      ?>" 
      alt="Site Logo">
      <p>WoodXEL has grown into a reliable brand known for its seamless customization, exceptional quality, and dual-purpose designs that improve. Reliable brand known for its seamless customization, exceptional quality, and dual-purpose. Quality, and dual-purpose designs that improve. Reliable brand known.</p>
   </div>   
   <div class="footer-section footer-section-column-2" data-v-c59813ef="">
      <h3 data-v-c59813ef="">Company</h3>
      <div class="text" data-v-c59813ef="">
         <a href="/blog-custom-wall-art-panels" class="blog-article" data-v-c59813ef="">Blog</a>
         <a href="/contact-us-custom-pixelated-artwork" class="blog-article" data-v-c59813ef="">Contact us</a>
         <a href="/terms-of-service" class="blog-article" data-v-c59813ef="">Terms of use</a>
         <a href="/privacy-policy" class="blog-article" data-v-c59813ef="">Privacy policy</a></div>
   </div>
   <div class="social-container footer-section footer-section-column-3" data-v-c59813ef="">
      <h3 data-v-c59813ef="">Follow Us</h3>
      <div class="text social-icons" data-v-c59813ef="">
         <a href="" data-v-c59813ef="">
            <svg width="38" height="38" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
               <g id="Group 757">
               <g id="Vector" filter="url(#filter0_d_3216_14090)">
               <path fill-rule="evenodd" clip-rule="evenodd" d="M40 7.42857C40 4.42929 37.5707 2 34.5714 2H7.42857C4.42929 2 2 4.42929 2 7.42857V34.5714C2 37.5707 4.42929 40 7.42857 40H34.5714C37.5707 40 40 37.5707 40 34.5714V7.42857Z" fill="#E8E2CF"/>
               </g>
               <path id="Vector_2" d="M28.0296 12.1289C27.7174 12.1289 27.4122 12.2191 27.1526 12.3882C26.893 12.5573 26.6907 12.7977 26.5713 13.0789C26.4518 13.3601 26.4205 13.6696 26.4814 13.9681C26.5423 14.2666 26.6927 14.5409 26.9134 14.7561C27.1342 14.9713 27.4154 15.1179 27.7216 15.1773C28.0278 15.2367 28.3452 15.2062 28.6336 15.0897C28.922 14.9732 29.1686 14.776 29.342 14.5229C29.5154 14.2698 29.608 13.9722 29.608 13.6679C29.608 13.2597 29.4417 12.8682 29.1457 12.5796C28.8497 12.291 28.4482 12.1289 28.0296 12.1289ZM34.0803 15.2325C34.0548 14.1684 33.8503 13.1156 33.4753 12.116C33.1408 11.2608 32.6202 10.4863 31.9494 9.84601C31.2981 9.18863 30.5019 8.68429 29.6212 8.37113C28.5987 7.99428 27.5177 7.79043 26.4248 7.76836C25.0305 7.69141 24.5833 7.69141 21.0054 7.69141C17.4276 7.69141 16.9803 7.69141 15.586 7.76836C14.4931 7.79043 13.4121 7.99428 12.3896 8.37113C11.5105 8.68746 10.7151 9.19137 10.0614 9.84601C9.38718 10.4811 8.8699 11.2573 8.54872 12.116C8.1622 13.113 7.95312 14.1669 7.93049 15.2325C7.85156 16.592 7.85156 17.028 7.85156 20.5164C7.85156 24.0048 7.85156 24.4409 7.93049 25.8003C7.95312 26.8659 8.1622 27.9198 8.54872 28.9168C8.8699 29.7755 9.38718 30.5517 10.0614 31.1868C10.7151 31.8414 11.5105 32.3454 12.3896 32.6617C13.4121 33.0385 14.4931 33.2424 15.586 33.2645C16.9803 33.3414 17.4276 33.3414 21.0054 33.3414C24.5833 33.3414 25.0305 33.3414 26.4248 33.2645C27.5177 33.2424 28.5987 33.0385 29.6212 32.6617C30.5019 32.3485 31.2981 31.8442 31.9494 31.1868C32.6232 30.5489 33.1442 29.7737 33.4753 28.9168C33.8503 27.9172 34.0548 26.8644 34.0803 25.8003C34.0803 24.4409 34.1593 24.0048 34.1593 20.5164C34.1593 17.028 34.1593 16.592 34.0803 15.2325ZM31.7126 25.6464C31.7031 26.4605 31.5518 27.2671 31.2654 28.0319C31.0554 28.59 30.7181 29.0943 30.2789 29.5067C29.8522 29.9306 29.336 30.2588 28.7662 30.4686C27.9818 30.7479 27.1545 30.8953 26.3196 30.9047C25.0042 30.9688 24.5175 30.9816 21.058 30.9816C17.5986 30.9816 17.1119 30.9816 15.7965 30.9047C14.9295 30.9205 14.0662 30.7903 13.2446 30.5199C12.6998 30.2994 12.2073 29.972 11.7977 29.558C11.3611 29.146 11.028 28.6413 10.8243 28.0832C10.5032 27.3074 10.3251 26.4825 10.2982 25.6464C10.2982 24.3639 10.2193 23.8894 10.2193 20.5164C10.2193 17.1434 10.2193 16.6689 10.2982 15.3864C10.3041 14.5541 10.4599 13.7293 10.7586 12.9497C10.9901 12.4083 11.3456 11.9258 11.7977 11.5389C12.1973 11.0979 12.6912 10.7477 13.2446 10.5129C14.0464 10.2308 14.8915 10.0834 15.7439 10.0769C17.0593 10.0769 17.5459 9.99991 21.0054 9.99991C24.4649 9.99991 24.9516 9.99991 26.2669 10.0769C27.1019 10.0862 27.9292 10.2336 28.7136 10.5129C29.3113 10.7292 29.8478 11.0809 30.2789 11.5389C30.7099 11.9329 31.0467 12.4145 31.2654 12.9497C31.5578 13.7306 31.7091 14.5551 31.7126 15.3864C31.7784 16.6689 31.7916 17.1434 31.7916 20.5164C31.7916 23.8894 31.7784 24.3639 31.7126 25.6464ZM21.0054 13.9372C19.6714 13.9397 18.368 14.3277 17.2601 15.0522C16.1521 15.7767 15.2892 16.8051 14.7805 18.0075C14.2718 19.2099 14.1401 20.5324 14.4019 21.8078C14.6638 23.0832 15.3075 24.2543 16.2517 25.1731C17.1959 26.092 18.3983 26.7173 19.7069 26.9701C21.0155 27.223 22.3717 27.0919 23.6039 26.5936C24.8362 26.0952 25.8893 25.252 26.6302 24.1703C27.3711 23.0886 27.7665 21.8171 27.7665 20.5164C27.7682 19.6509 27.5944 18.7935 27.2551 17.9937C26.9158 17.1938 26.4176 16.4673 25.7893 15.8559C25.1609 15.2444 24.4148 14.7601 23.5938 14.4309C22.7728 14.1016 21.8932 13.9338 21.0054 13.9372ZM21.0054 24.7871C20.1391 24.7871 19.2922 24.5367 18.5719 24.0674C17.8516 23.5981 17.2901 22.9311 16.9586 22.1507C16.6271 21.3704 16.5403 20.5117 16.7093 19.6832C16.8784 18.8548 17.2955 18.0938 17.9081 17.4965C18.5207 16.8993 19.3012 16.4925 20.1509 16.3277C21.0006 16.163 21.8813 16.2475 22.6817 16.5708C23.482 16.894 24.1661 17.4414 24.6474 18.1437C25.1287 18.846 25.3856 19.6717 25.3856 20.5164C25.3856 21.0772 25.2723 21.6326 25.0522 22.1507C24.8321 22.6689 24.5094 23.1397 24.1027 23.5363C23.696 23.9328 23.2131 24.2474 22.6817 24.462C22.1502 24.6767 21.5806 24.7871 21.0054 24.7871Z" fill="#2C2C2C"/>
               </g>
               <defs>
               <filter id="filter0_d_3216_14090" x="0.1" y="0.1" width="41.8" height="41.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
               <feFlood flood-opacity="0" result="BackgroundImageFix"/>
               <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
               <feOffset/>
               <feGaussianBlur stdDeviation="0.95"/>
               <feComposite in2="hardAlpha" operator="out"/>
               <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.75 0"/>
               <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3216_14090"/>
               <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3216_14090" result="shape"/>
               </filter>
               </defs>
            </svg>
         </a>
         <a href="" data-v-c59813ef="">
         <svg width="38" height="38" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 768">
            <g id="Group 758">
            <g id="Vector" filter="url(#filter0_d_3216_14093)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M40 7.42857C40 4.42929 37.5707 2 34.5714 2H7.42857C4.42929 2 2 4.42929 2 7.42857V34.5714C2 37.5707 4.42929 40 7.42857 40H34.5714C37.5707 40 40 37.5707 40 34.5714V7.42857Z" fill="#E8E2CF"/>
            </g>
            </g>
            <path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd" d="M19.4528 24.7627V24.9525C19.115 27.0378 18.4632 29.0591 17.5198 30.9467C17.0774 31.7311 16.5784 32.4817 16.0268 33.1926C16.0268 33.2716 15.901 33.3823 15.7753 33.3507C15.6496 33.3191 15.6339 33.1926 15.6182 33.0818C15.4405 31.9946 15.3563 30.8939 15.3667 29.7921C15.3667 28.3687 15.5867 27.8784 17.4098 20.1761C17.4413 20.073 17.4413 19.9628 17.4098 19.8598C16.9313 18.7295 16.8482 17.4693 17.174 16.2854C17.9913 13.6599 20.9616 13.4543 21.4802 15.6211C21.7945 16.9655 20.9616 18.7843 20.3015 21.3148C19.8143 23.4658 22.3288 25.0474 24.4662 23.4658C26.6036 21.8842 27.2008 18.5629 27.0593 16.1272C26.7764 11.2401 21.4488 10.1963 18.0856 11.762C14.2194 13.5651 13.3708 18.3889 15.0838 20.5873C15.3038 20.872 15.4767 21.046 15.3981 21.3306C15.3196 21.6153 15.1938 22.2163 15.0681 22.6592C15.0529 22.732 15.0208 22.8002 14.9746 22.8582C14.9283 22.9163 14.8692 22.9625 14.8019 22.9933C14.7345 23.0241 14.661 23.0386 14.5871 23.0355C14.5132 23.0324 14.4411 23.0118 14.3766 22.9755C13.7586 22.7103 13.2178 22.2912 12.805 21.7577C11.9544 20.4863 11.5 18.9885 11.5 17.4558C11.5 15.9231 11.9544 14.4252 12.805 13.1538C13.8845 11.5655 15.3834 10.3122 17.1328 9.53529C18.8822 8.75842 20.8125 8.48886 22.706 8.75703C24.5828 8.88124 26.3638 9.63634 27.7631 10.9012C29.1624 12.166 30.099 13.8672 30.4225 15.7318C30.7572 18.6237 29.9999 21.5365 28.3009 23.8928C25.7863 27.056 21.7159 27.23 19.83 25.3162C19.7043 25.0474 19.5943 24.9367 19.4528 24.7627Z" fill="#2C2C2C"/>
            </g>
            <defs>
            <filter id="filter0_d_3216_14093" x="0.1" y="0.1" width="41.8" height="41.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset/>
            <feGaussianBlur stdDeviation="0.95"/>
            <feComposite in2="hardAlpha" operator="out"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.75 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3216_14093"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3216_14093" result="shape"/>
            </filter>
            </defs>
            </svg>
         
         </a>
         <a href="" data-v-c59813ef="">
            <svg width="38" height="38" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
               <g id="Group 759">
               <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M39.6663 7.42801C39.6663 4.42903 37.2993 2 34.3769 2H7.93C5.00762 2 2.64062 4.42903 2.64062 7.42801V34.568C2.64062 37.567 5.00762 39.996 7.93 39.996H34.3769C37.2993 39.996 39.6663 37.567 39.6663 34.568V7.42801Z" fill="#2C2C2C"/>
               <g id="Mask group" filter="url(#filter0_d_3216_14097)">
               <mask id="mask0_3216_14097" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="38" height="38">
               <path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd" d="M40 7.43191C40 4.43294 37.5707 2.00391 34.5714 2.00391H7.42857C4.42929 2.00391 2 4.43294 2 7.43191V34.5719C2 37.5709 4.42929 40 7.42857 40H34.5714C37.5707 40 40 37.5709 40 34.5719V7.43191Z" fill="#E8E2CF"/>
               </mask>
               <g mask="url(#mask0_3216_14097)">
               <path id="Vector_3" d="M37.91 1.03125H4.09C3.5357 1.03125 3.0041 1.25707 2.61215 1.65903C2.2202 2.06099 2 2.60616 2 3.17462V37.8582C2 38.1397 2.05406 38.4184 2.15909 38.6784C2.26412 38.9385 2.41807 39.1747 2.61215 39.3738C2.80622 39.5728 3.03662 39.7307 3.29019 39.8384C3.54376 39.9461 3.81554 40.0016 4.09 40.0016H22.292V24.9006H17.352V19.055H22.292V14.6709C22.1897 13.6416 22.3082 12.6018 22.6392 11.6244C22.9702 10.6471 23.5057 9.75581 24.2081 9.01317C24.9105 8.27052 25.7629 7.69447 26.7054 7.32542C27.6479 6.95636 28.6577 6.80324 29.664 6.8768C31.1428 6.86746 32.6209 6.94553 34.091 7.11062V12.3716H31.07C28.676 12.3716 28.22 13.5407 28.22 15.2359V18.9966H33.92L33.179 24.8421H28.22V40.0016H37.91C38.1845 40.0016 38.4562 39.9461 38.7098 39.8384C38.9634 39.7307 39.1938 39.5728 39.3879 39.3738C39.5819 39.1747 39.7359 38.9385 39.8409 38.6784C39.9459 38.4184 40 38.1397 40 37.8582V3.17462C40 2.89315 39.9459 2.61443 39.8409 2.35439C39.7359 2.09434 39.5819 1.85806 39.3879 1.65903C39.1938 1.46 38.9634 1.30212 38.7098 1.1944C38.4562 1.08669 38.1845 1.03125 37.91 1.03125Z" fill="#E8E2CF"/>
               </g>
               </g>
               </g>
               <defs>
               <filter id="filter0_d_3216_14097" x="0.1" y="0.103906" width="41.8" height="41.7961" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
               <feFlood flood-opacity="0" result="BackgroundImageFix"/>
               <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
               <feOffset/>
               <feGaussianBlur stdDeviation="0.95"/>
               <feComposite in2="hardAlpha" operator="out"/>
               <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.75 0"/>
               <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3216_14097"/>
               <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3216_14097" result="shape"/>
               </filter>
               </defs>
            </svg>
         </a>
         <a href="" data-v-c59813ef="">
         <svg width="38" height="38" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 760">
            <g id="Vector" filter="url(#filter0_d_3216_14102)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M40 7.42857C40 4.42929 37.5707 2 34.5714 2H7.42857C4.42929 2 2 4.42929 2 7.42857V34.5714C2 37.5707 4.42929 40 7.42857 40H34.5714C37.5707 40 40 37.5707 40 34.5714V7.42857Z" fill="#E8E2CF"/>
            </g>
            <path id="Vector_2" d="M7.77029 7.69141L18.407 21.8389L7.70312 33.3414H10.1121L19.4834 23.2708L27.0551 33.3414H35.2531L24.0179 18.3981L33.981 7.69141H31.572L22.9415 16.9663L15.9683 7.69141H7.77029ZM11.3129 9.45656H15.0791L31.7099 31.576H27.9438L11.3129 9.45656Z" fill="#2C2C2C"/>
            </g>
            <defs>
            <filter id="filter0_d_3216_14102" x="0.1" y="0.1" width="41.8" height="41.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset/>
            <feGaussianBlur stdDeviation="0.95"/>
            <feComposite in2="hardAlpha" operator="out"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.75 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3216_14102"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3216_14102" result="shape"/>
            </filter>
            </defs>
            </svg>

         </a>
         <a href="" data-v-c59813ef="">
         <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 763">
            <g id="Vector" filter="url(#filter0_d_3216_14105)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M40 7.43248C40 4.43319 37.5707 2.00391 34.5714 2.00391H7.42857C4.42929 2.00391 2 4.43319 2 7.43248V34.5753C2 37.5746 4.42929 40.0039 7.42857 40.0039H34.5714C37.5707 40.0039 40 37.5746 40 34.5753V7.43248Z" fill="#E8E2CF"/>
            </g>
            <path id="Vector_2" d="M19.4315 21.7361C18.9249 21.7233 18.4181 21.752 17.9162 21.8219C17.1879 21.9858 16.5493 22.4206 16.13 23.0382C15.7107 23.6558 15.5421 24.4098 15.6585 25.1471C15.7682 25.892 16.1568 26.5675 16.7456 27.0368C17.3345 27.506 18.0797 27.7341 18.8303 27.6747C19.5699 27.6236 20.2628 27.295 20.7702 26.7545C21.2776 26.2141 21.5621 25.5019 21.5665 24.7606C21.5665 20.2453 21.5665 15.7361 21.5665 11.2207V10.7422H25.0818C25.3027 13.7299 27.0573 15.2514 29.9285 15.6502V19.0919C28.2093 19.0705 26.5376 18.5247 25.1371 17.5275C25.1371 17.687 25.1371 17.8035 25.1371 17.9201C25.1371 20.1348 25.1371 22.3434 25.1371 24.552C25.1832 25.9216 24.7901 27.2701 24.0153 28.4003C23.2404 29.5306 22.1244 30.3834 20.8303 30.8342C19.6534 31.3159 18.3558 31.42 17.1172 31.1321C15.8785 30.8441 14.7599 30.1783 13.9162 29.2269C13.0115 28.3517 12.398 27.2194 12.1587 25.9837C11.9195 24.7479 12.0661 23.4685 12.5788 22.3189C13.0987 20.9931 14.0424 19.8765 15.263 19.1431C16.4836 18.4096 17.9126 18.1004 19.3272 18.2637L19.4561 18.2943L19.4315 21.7361Z" fill="#2C2C2C"/>
            </g>
            <defs>
            <filter id="filter0_d_3216_14105" x="0.100371" y="0.104277" width="41.7993" height="41.7993" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset/>
            <feGaussianBlur stdDeviation="0.949814"/>
            <feComposite in2="hardAlpha" operator="out"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.75 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3216_14105"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3216_14105" result="shape"/>
            </filter>
            </defs>
         </svg>
         </a>
         <a href="" data-v-c59813ef="">
         <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 762">
            <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M39.675 7.42751C39.675 4.42881 37.3064 2 34.3821 2H7.91786C4.99355 2 2.625 4.42881 2.625 7.42751V34.5651C2.625 37.5638 4.99355 39.9926 7.91786 39.9926H34.3821C37.3064 39.9926 39.675 37.5638 39.675 34.5651V7.42751Z" fill="#2C2C2C"/>
            <g id="Mask group" filter="url(#filter0_d_3216_14108)">
            <mask id="mask0_3216_14108" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="38" height="38">
            <path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd" d="M40 7.43532C40 4.43662 37.5707 2.00781 34.5714 2.00781H7.42857C4.42929 2.00781 2 4.43662 2 7.43532V34.5729C2 37.5716 4.42929 40.0004 7.42857 40.0004H34.5714C37.5707 40.0004 40 37.5716 40 34.5729V7.43532Z" fill="#E8E2CF"/>
            </mask>
            <g mask="url(#mask0_3216_14108)">
            <path id="Vector_3" d="M37.1901 2.00808H4.80986C4.44587 2.00305 4.08446 2.06934 3.74625 2.20314C3.40805 2.33694 3.09967 2.53564 2.83875 2.78789C2.57782 3.04014 2.36945 3.341 2.22554 3.67329C2.08162 4.00558 2.00499 4.36278 2 4.72451V37.2837C2.00499 37.6454 2.08162 38.0026 2.22554 38.3349C2.36945 38.6672 2.57782 38.9681 2.83875 39.2203C3.09967 39.4726 3.40805 39.6713 3.74625 39.8051C4.08446 39.9389 4.44587 40.0052 4.80986 40.0001H37.1901C37.5541 40.0052 37.9155 39.9389 38.2537 39.8051C38.592 39.6713 38.9003 39.4726 39.1612 39.2203C39.4222 38.9681 39.6306 38.6672 39.7745 38.3349C39.9184 38.0026 39.995 37.6454 40 37.2837V4.72451C39.995 4.36278 39.9184 4.00558 39.7745 3.67329C39.6306 3.341 39.4222 3.04014 39.1612 2.78789C38.9003 2.53564 38.592 2.33694 38.2537 2.20314C37.9155 2.06934 37.5541 2.00305 37.1901 2.00808ZM13.5262 33.8074H7.79175V16.711H13.5262V33.8074ZM10.659 14.3175C9.86811 14.3175 9.10965 14.0053 8.55044 13.4495C7.99122 12.8938 7.67706 12.1401 7.67706 11.3541C7.67706 10.5682 7.99122 9.81444 8.55044 9.2587C9.10965 8.70296 9.86811 8.39074 10.659 8.39074C11.0789 8.34341 11.5042 8.38477 11.9069 8.5121C12.3096 8.63942 12.6808 8.84986 12.996 9.12962C13.3113 9.40937 13.5635 9.75215 13.7362 10.1355C13.9089 10.5188 13.9981 10.9341 13.9981 11.3541C13.9981 11.7741 13.9089 12.1894 13.7362 12.5728C13.5635 12.9561 13.3113 13.2989 12.996 13.5786C12.6808 13.8584 12.3096 14.0688 11.9069 14.1962C11.5042 14.3235 11.0789 14.3648 10.659 14.3175ZM34.2082 33.8074H28.4738V24.6323C28.4738 22.3338 27.6519 20.8331 25.5684 20.8331C24.9236 20.8378 24.2957 21.0388 23.7694 21.409C23.2431 21.7793 22.8436 22.3009 22.6247 22.9037C22.4752 23.3502 22.4103 23.8204 22.4336 24.2904V33.7884H16.6992C16.6992 33.7884 16.6992 18.2497 16.6992 16.692H22.4336V19.1045C22.9545 18.2062 23.7122 17.4661 24.625 16.964C25.5378 16.4619 26.5711 16.2168 27.6137 16.2551C31.4366 16.2551 34.2082 18.7056 34.2082 23.9675V33.8074Z" fill="#E8E2CF"/>
            </g>
            </g>
            </g>
            <defs>
            <filter id="filter0_d_3216_14108" x="0.100371" y="0.108184" width="41.7993" height="41.7914" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset/>
            <feGaussianBlur stdDeviation="0.949814"/>
            <feComposite in2="hardAlpha" operator="out"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.75 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3216_14108"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3216_14108" result="shape"/>
            </filter>
            </defs>
         </svg>
         </a>
      </div>
   </div>
</footer>
<div class="last" data-v-c59813ef=""><p data-v-c59813ef="">2024. Woodxel.com All Rights Reserved</p></div>
<?php wp_footer(); ?>
<!--/div-->
</body>
</html>
