<style>
  .user-profile {
    height: 80vh;
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 2rem;
    padding: 2rem;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right,
    #ffffff,
    #e0e8ff,
    #c0d0ff,
    #a0b8ff,
    #8099ff,
    #5077ff,
    #2052ff);
    background-size: 100% 100%;
  }
  
  .user-info {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  
  .profile-image {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 1rem;
  }
  
  .user-name {
    margin-bottom: 0.5rem;
  }
  
  .user-email {
    margin-bottom: 1rem;
  }
  
  .update-btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .user-properties,
  .companies {
    border: 1px solid #ccc;
    padding: 1rem;
    border-radius: 4px;
    background-color: white;
    box-shadow: 10px 10px 10px #525e8c; 
  }
  
  .user-properties table,
  .companies table {
    width: 100%;
    border-collapse: collapse;
  }
  
  .user-properties th,
  .user-properties td,
  .companies th,
  .companies td {
    padding: 0.5rem;
    border-bottom: 1px solid #ccc;
  }
  
  .user-properties th,
  .companies th {
    text-align: left;
  }
  </style>
<x-app-layout>
    <div class="user-profile">
        <div class="user-info">
          <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="{{ $user->name }}" class="profile-image">
          <h2 class="user-name">{{ $user->name }}</h2>
          <p class="user-email">{{ $user->email }}</p>
          <button class="update-btn">Update</button>
        </div>
        <div class="user-properties">
          <h3>User Properties</h3>
          <table>
            <tr>
              <td>First Name:</td>
              <td>{{ $user->name }}</td>
            </tr>
            <tr>
              <td>Email:</td>
              <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>Role:</td>
                <td>{{ $user->getRoleNames()->first() }}</td>
              </tr>
            <!-- Add more user properties as needed -->
          </table>
        </div>
        <div class="companies">
            <h3>Activity</h3>
            <table>
              <tr>
                <th>Jobs</th>
                <th>Roles</th>
                <th>Phases</th>
              </tr>
              <tr>
                <td>Ultimo LLC</td>
                <td>Admin</td>
                <td>4,162</td>
              </tr>
              <tr>
                <td>Dash-herman</td>
                <td>philosopher</td>
                <td>87</td>
              </tr>
            </table>
          </div>
        <div class="companies">
          <h3>Companies</h3>
          <table>
            <tr>
              <th>Jobs</th>
              <th>Roles</th>
              <th>Phases</th>
            </tr>
            <tr>
              <td>Ultimo LLC</td>
              <td>Admin</td>
              <td>4,162</td>
            </tr>
            <tr>
              <td>Dash-herman</td>
              <td>philosopher</td>
              <td>87</td>
            </tr>
          </table>
        </div>
      </div>
</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.waves.min.js"></script>
<script src="{{ asset('js/forumpage.js') }}"></script>
