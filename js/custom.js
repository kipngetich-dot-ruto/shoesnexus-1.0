const onSearchFocus = () =>{
    const hideMobileMenu = document.querySelector('.mobile_nav_menu')
    const focusMobileNavSearch = document.querySelector('.mobile_nav_search')
    const main = document.querySelector('.main')
    const hidden = document.querySelectorAll('.hidden')


    main.style.display="none"
    hideMobileMenu.style.display="none"
    focusMobileNavSearch.classList.add("nav_search")

    for (let i = 0; i < hidden.length; i++) {
      hidden[i].style.display="flex"
    }
}

const ToggleMenu = () => {
    const clsName = document.getElementById("toggle_icon")
    clsName.className = clsName.className === "fa fa-times" ? "fa fa-bars" : "fa fa-times"
}