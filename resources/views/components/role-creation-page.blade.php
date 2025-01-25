<div class="role-managment-page">
    <div class="heading">
        <h1>
            {{ __('Manage user roles') }}
        </h1>
        <h4>3/49 roles</h4>
    </div>
    <div class="roles-content">
        <div class="roles-list">
            <span>
                <h1> Roles </h1>
                <hr/>
            </span>
            <table>
                @foreach ($roles as $role )   
                <tr>
                    <td><img src="{{asset('images/usr.png')}}" alt=""></td>
                    <td>{{$role->name}}</td>
                    <td class="actions">
                        <x-delete-button/>
                        <x-view-button/>
                        <x-show-button/>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="create-role">
            <button id="create-role-btn">Create New Role</button>
        </div>
    </div>
</div>
<style>
    .role-managment-page {
        display: flex;
        flex-direction: column;
        padding: 10px;
        height: 100vh;
        width: 80vw;
    }

   

    .roles-content {
        display: flex;
        gap: 0.5%;
        height: fit-content;
    }
    
    #create-role-btn{
        background-color: rgb(18, 178, 18);
        border-radius:6px; 
        padding: 5px;
        margin: 4px;
        color: white;
        width: 100%;
        font-size: 20px;
        height: 55px;
        box-shadow: #ccc 1px 1px 1px;
    }
    #create-role-btn:hover{
        opacity: 0.9;
    }
    #create-role-btn:active{
        transform: translate(2px,2px);
    }
    .create-role,
    .roles-list,
    .heading {
        margin: 5px;
        box-shadow: #ccc 2px 0 2px;
        border: 0.5px solid #ccc;
        border-radius: 5px;
    }
    .heading{
        height: 10vh;
        width: 100%;
        text-align: center;
        color: #000;
    }
    .create-role {
        height: fit-content;
        width: 30dvw;
        padding: 1%;
    }
    
    .roles-list {
        height: 80vh;
        width: 50vw;
    }
    .actions{
        display: flex;
        padding: 1px;
    }
.roles-list span h1{
    background-color: #f4f4f4;
    padding: 8px 12px;
    font-size: 18px;
    font-weight: 900;
    color: #000;
}
</style>
