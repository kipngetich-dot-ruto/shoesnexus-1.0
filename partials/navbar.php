<div class="custom_nav">
    <!-- Mobile Navigation -->
     <div class="mobile_nav">
        <div class="mobile_nav_menu">
            <div class="mobile_navbrand">
                <button type="button" class="toggle_btn" onclick="ToggleMenu()">
                    <i class="fa fa-bars" id="toggle_icon" aria-hidden="true"></i>
                </button>
                <a  class="navbrand" href="/">
                    <span>Shoes</span>Nexus
                </a>
            </div>

            <ul>
                <li>
                    <a href="">
                    <button type="button" class="mobile_btn">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                    </button>
                    </a>
                </li>
                <li>
                    <a href="">
                    <button type="button" class="mobile_btn">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>
                    </a>
                </li>
            </ul>
        </div>

        <div class="mobile_search">
            <script>
                document.write(
                    `<a href=" `+ document.referrer +`" class="hidden"> 
                        <button type="button"><ion-icon name="arrow-back-outline"></ion-icon></button>
                    </a>`
                )
            </script>
            <form action="" class="search_form">
                <input 
                    type="text" name="search" 
                    placeholder="Search for a product brand, category"
                    class="mobile_nav_search"
                    onfocus="onSearchFocus()"
                >

            <span class="hidden">
                <Span>|</Span>
                <button><ion-icon name="search-outline"></ion-icon></button>
            </span>
            </form>
        </div>
     </div>

    <!-- Desktop Navigation -->
     <div class="desktop_nav_sn">
        <a class="navbrand" href="/">
            <span>Shoes</span>Nexus
        </a>
        <div class="desktop_menu_sn">
            <form action="">
            <input 
                type="text" 
                name="search"
                class="search_input"
                placeholder="Search for a product brand, category"
            >
                <button class="btn_search btn">Search</button>
            </form>
            <ul>
                <li>
                    <button type="button" class="desktop_btn" style="display: flex; align-items: center;">
                        <span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span> 
                        <span>Account</span>
                        <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    </button>
                </li>
                <li>
                    <button type="button" class="desktop_btn">
                        <span class="icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i></span> 
                        <span>Help</span>
                        <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    </button>
                </li>
                <li>
                    <a href="">
                        <button class="desktop_a">
                            <span class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
                            <span>Cart</span>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
     </div>
</div>