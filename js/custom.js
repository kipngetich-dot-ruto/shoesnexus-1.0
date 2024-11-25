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
// Making sticky navigation
window.onscroll = function () {makeSticky()}

const makeSticky = () => {
  const mobileNav = document.querySelector('.mobile_nav')
  const desktopNav = document.querySelector('.desktop_nav_sn')

  if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) 
    {
    mobileNav.classList.add("sticky_nav")
    desktopNav.classList.add("sticky_nav")
  }
  else
  {
    mobileNav.classList.remove("sticky_nav")
    desktopNav.classList.remove("sticky_nav")
  }
}