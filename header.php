<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html">
                    <!-- <img height="40" width="140" src="wedart.jpeg" alt="er"> -->
                </a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
            <div class="input-group" style="background-color: transparent;">
                <img class="img-fluid for-light" height="40" width="110" src="wedart.jpeg" alt="">
            </div>
        </div>
        <div class="nav-right col-6 pull-right right-header p-0">
            <ul class="nav-menus">

                <li class="profile-nav onhover-dropdown p-0 me-0">
                    <div class="d-flex profile-media"><img class="b-r-50" src="../assets/images/dashboard/profile.png" alt="">
                        <div class="flex-grow-1" style="color: blue"><span id="Uname">Null</span>
                            <p class="mb-0 font-roboto" ><span id="Urole">Null</span> <i data-feather="chevron-down"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li>
                            <button class="drop-btn" id="logout">
                                <span><i data-feather="log-out"></i>Log Out</span>
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    var logout = document.getElementById('logout');

    logout.addEventListener('click', () => {
        var cookies = document.cookie.split(";");
        for (var i = 0; i < cookies.length; i++) {
          var cookie = cookies[i];
          var eqPos = cookie.indexOf("=");
          var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
          document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }
        sessionStorage.clear();
        window.location.href = 'login.php';
    })

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function getUname (){
        var name = getCookie('name');
        if(name != ''){
            document.getElementById('Uname').textContent = name.toUpperCase();
        } else {
            document.getElementById('Uname').textContent = sessionStorage.getItem('name').toUpperCase();
        }
    } getUname();

    function getRole (){
        var role = getCookie('role');
        if(role != ''){
            document.getElementById('Urole').textContent = role.toUpperCase();
        } else {
            document.getElementById('Urole').textContent = sessionStorage.getItem('role').toUpperCase();
        }
    }getRole();
    

</script>

<style>
    .drop-btn{
        border: none;
        background-color: transparent;
    }
</style>