<x-app-layout>
    {{-- <h1>user management page</h1> --}}
    <div class="user-management-page">
        {{-- option cards with ad role..minamn options(maybe more if i can figure some out) --}}
        <div class="sidebar">
            <section class="option-card" id="adduser">add user</section>
            <section class="option-card" id="manage-roles"> manage roles</section>
            <section class="option-card" id="user-list"> user list</section>
            <section class="option-card">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"> {{ __('Log Out') }}</button>
                </form>
            </section>
        </div>
        <div id="roles-mngt" style="display: none">
            @include('components.role-creation-page', [$roles, $permissions])
        </div>
        <div id="add-user">
            @include('auth.register')
        </div>
        {{-- searching section --}}
        <section class="user-mngt-section" id="users-section">
            <div class="user-counts">
                <div class="icon"><img src="{{ asset('images/user(1).png') }}" alt=""></div>
                <h1>User Management Workspace</h1>
                <h3>manage users along with their roles</h3>
                {{-- cards for display user type counts(just felt like adding this for cooler look) --}}
                <div class="counts">
                    <div class="count-card" id="admin-card"> <img src="{{ asset('images/admin.png') }}" alt=""
                            srcset="">
                        <section><span>{{ $adminCount }}</span>
                            <p>Admins</p>
                        </section>
                    </div>
                    <div class="count-card" id="faculty-card"> <img src="{{ asset('images/faculty.png') }}"
                            alt="" srcset="">
                        <section><span>{{ $facultyCount }}</span>
                            <p>Faculty</p>
                        </section>
                    </div>
                    <div class="count-card" id="student-card"> <img src="{{ asset('images/student.png') }}"
                            alt="" srcset="">
                        <section><span>{{ $studentCount }}</span>
                            <p>Students</p>
                        </section>
                    </div>
                </div>
            </div>
            <div class="content">
                <div id="user-lists">
                    @include('components.user-list', [$users])
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.waves.min.js"></script>
    <script src="{{ asset('js/forumpage.js') }}"></script>
    <script>
        var userssection = document.getElementById('users-section');
        var rolessection = document.getElementById('roles-mngt');
        var userlist = document.getElementById('user-lists');
        var register = document.getElementById('add-user')
        document.getElementById('manage-roles').addEventListener('click', function(event) {
            if (userssection.style.display != 'none') {
                userssection.style.display = 'none';
            } else if (register.style.display != 'none') {
                register.style.display = 'none';
            }
            rolessection.style.display = 'block';
        });
        document.getElementById('user-list').addEventListener('click', function(event) {
            if (rolessection.style.display != 'none') {
                rolessection.style.display = 'none';
            }else if (register.style.display != 'none') {
                register.style.display = 'none';
            }
            userssection.style.display = 'block';
        });
        document.getElementById('adduser').addEventListener('click', function(event) {
            if (userssection.style.display != 'none') {
                userssection.style.display = 'none';
            } else if (rolessection.style.display != 'none') {
                rolessection.style.display = 'none';
            }
            register.style.display = 'block';
        });
    </script>
</x-app-layout>
<style>
    .count-card,
    .counts p {
        font-weight: bolder
    }

    .user-management-page {
        display: flex;
        height: 100%;
        width: 100%;
        box-shadow: rgba(0, 0, .6, .4) 3px 2px 6px, rgba(.5, 0, .3, .3) 2px 7px 15px -2px, #000(205, 205, 214, .2) 0 -3px 0 inset;
        text-align: center
    }

    #add-user {
        display: none;
        margin: auto;
        width: 60%;
    }
    .content,
    .user-counts {
        height: 25%;
        width: 95%;
        margin: auto;
        box-shadow: #ccc 1px 2px 6px;
        background-color: #fff;
        border-radius: 5px;
        overflow: visible;
        border: 1px solid #ccc;
        padding: 1%;
    }

    .count-card,
    .icon,
    .user-counts {
        border: 1px solid #ccc
    }
    
    .content {
        height: fit-content;
        margin-top: 1%;
        
        padding: 2%;
    }
    
    .counts {
        display: flex;
        margin: auto;
        justify-content: center;
        gap: 4%;
        height: 60%;
        width: 60%;
        align-items: center;
        
    }
    
    .counts section {
        text-align: center;
        align-content: center;
        text-shadow: #000 1px 0 2px;
    }

    .count-card {
        height: 100px;
        width: 420px;
        display: flex;
        padding: .5% .5% .5% 1%;
        gap: 8%;
        color: #fff
    }
    
    .count-card img {
        object-fit: inherit;
        object-position: center;
        width: 90px;
        height: auto
    }

    .icon,
    .icon img {
        object-fit: fill;
        object-position: center;
    }



    #admin-card {
        background: linear-gradient(to right, #0076a8, #003d5b);
    }
    
    #student-card {
        background: linear-gradient(to right, #5bc0ef, #3ae0d1);
    }

    #faculty-card {
        background: linear-gradient(135deg, #fff, #fff, silver);
        background: linear-gradient(120deg, #76c93a, #6ef12b);
    }

  
    .user-counts h1,h3{
        color: #000;
        text-shadow: #ccc 2px 1px 2px;
        margin-bottom: 3px;
    }
    .user-counts h3{
        color: #ffff;
    }
    .user-counts {
        margin-top: 1%
    }
    
    .icon {
        width: 160px;
        height: fit-content;
        background-color: #fff;
        position: absolute;
        margin-left: 4%;
        margin-top: -1.5%;
        border-radius: 4px;
        padding: .5%
    }

    .icon img {
        height: 100%;
        width: 100%;

    }

    .user-mngt-section {
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
        padding: 1%
    }

    .user-mngt-section .search-bar {
        display: flex;
        align-items: center;
        justify-content: center;
        border: .5px solid #ccc;
        border-radius: 5px;
        padding: 1px;
        width: 60%;
        height: fit-content;
        background-color: rgba(255, 255, 255, .8);
        margin: 0 auto;
        margin-bottom: 1%;
        border-radius: 25px;
        overflow: hidden;
    }

    .user-mngt-section .search-bar input {
        border: .5px solid #ccc;
        outline: none;
        flex: 1;
        padding: 12px;
        background-color: rgba(255, 255, 255, .9);
        border-radius: 22px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        margin-left: 2px
    }

    .user-mngt-section .search-bar button {
        background: #ccc;
        border: 1px solid #fff;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
        height: 100%;
    }

    .user-mngt-section .search-bar svg {
        width: 30px;
        height: 32px;
        color: #fff
    }

    .sidebar {
        display: flex;
        flex-direction: column;
        width: 20%;
        padding: 2%;
        gap: 5%;
        background-color: #022c50
    }

    .option-card {
        height: 70px;
        width: 100%;
        box-shadow: rgba(0, 0, .6, .4) 3px -2px 6px, rgba(.5, 0, .3, .3) 2px -7px 15px -2px, rgba(0, .3, .6, .2) 0 3px 0;
        background-color: #fff;
        border-radius: 4px;
        transition: .2s
    }

    .option-card:hover {
        scale: 1.03;
        opacity: .9
    }
</style>
