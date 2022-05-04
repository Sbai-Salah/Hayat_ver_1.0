

const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');
const tableData_dashboard = document.getElementById('tdata');

// allSideMenu.forEach(item => {
//     const li = item.parentElement;
//     item.addEventListener('click', function() {
//         allSideMenu.forEach(i => {
//             i.parentElement.classList.remove('active');
//         })
//          li.classList.add('active');


//     })
// });
const d2_1 = document.querySelector('.head-title .left .upper-title-three-divs')
const d2_2 = document.querySelector('.head-title .breadcrumb li a ')

// Dashboard BUTTON CLICKED

const d1 = document.querySelector('#sidebar .side-menu.top .btn-dash');
// const d1_1 = document.getElementsByClassName("donner-section-btn");
d1.addEventListener('click', function() {
   console.log("Rah khedama hna ldakhel")
    tableData_dashboard.classList.remove('tabledatadelete');
    // d1_1.classList.add("display-none")
    d2_1.innerHTML = 'Dashboard'
    d2_2.innerHTML = 'Dashboard'
})
// DONNER BUTTON CLICKED 
const d2 = document.querySelector('#sidebar .side-menu.top .btn-donner');

d2.addEventListener('click', function() {
   console.log("Rah khedama hna ldakhel")
    tableData_dashboard.classList.add('tabledatadelete');
    d2.classList.add('active');

    d2_1.innerHTML = 'Donner'
    d2_2.innerHTML = 'Donner'
})

// NEED BUTTON CLICKED 
const d3 = document.querySelector('#sidebar .side-menu.top .btn-need');

d3.addEventListener('click', function() {
   console.log("Rah khedama hna ldakhel")
    tableData_dashboard.classList.add('tabledatadelete');
    d2_1.innerHTML = 'Besoin'
    d2_2.innerHTML = 'Besoin'
})


// BADGES BUTTON CLICKED 
const d4 = document.querySelector('#sidebar .side-menu.top .btn-badges');

d4.addEventListener('click', function() {
   console.log("Rah khedama hna ldakhel")
    tableData_dashboard.classList.add('tabledatadelete');
    d2_1.innerHTML = 'Mes Badges'
    d2_2.innerHTML = 'Badges'
})

// Temoinage BUTTON CLICKED 
const d5 = document.querySelector('#sidebar .side-menu.top .btn-temoinage');

d5.addEventListener('click', function() {
   console.log("Rah khedama hna ldakhel")
    tableData_dashboard.classList.add('tabledatadelete');
    d2_1.innerHTML = 'Temoinage'
    d2_2.innerHTML = 'Temoinage'
})




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function() {
    sidebar.classList.toggle('hide');
})



const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function(e) {
    if (window.innerWidth < 576) {
        e.preventDefault();
        searchForm.classList.toggle('show');
        if (searchForm.classList.contains('show')) {
            searchButtonIcon.classList.replace('bx-search', 'bx-x');
        } else {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
        }
    }
})





if (window.innerWidth < 768) {
    sidebar.classList.add('hide');
} else if (window.innerWidth > 576) {
    searchButtonIcon.classList.replace('bx-x', 'bx-search');
    searchForm.classList.remove('show');
}


window.addEventListener('resize', function() {
    if (this.innerWidth > 576) {
        searchButtonIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function() {
    if (this.checked) {
        document.body.classList.add('dark');
    } else {
        document.body.classList.remove('dark');
    }
})





