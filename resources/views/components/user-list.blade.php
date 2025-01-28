<div class="search-container">
    <div class="search-bar">
        <input type="text" placeholder="  search users by full name">
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </button>
    </div>
</div>
<table>
    <thead>
        <tr>
            <th>Profile Picture</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Workspace Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td id="image"><img src="{{ asset('storage/' . $user->profile_picture) }}"
                        alt="Profile Picture" /></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->getRoleNames()->first() }}</td>
                <td class="actions">
                    <span class="deleteButton" onclick="showDeleteConfirmation(event, '{{ $user->name }}', '{{ $user->id }}')">
                        <x-delete-button />
                    </span>
                    <span><a href="{{route('user.view',$user->id)}}"><x-show-button /></span></a>
                    <span><a href="{{route('user.edit',$user->id)}}"><x-view-button /></span></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Background Overlay -->
<div id="overlay" class="hidden"></div>

<!-- Confirmation Popup -->
<div id="deleteConfirmation" class="hidden">
    <div class="popup-content">
        <h2 class="text-sm font-semibold mb-2">Confirm Deletion</h2>
        <p class="text-gray-600 text-xs mb-4">Are you sure you want to delete <strong id="userName"></strong>?</p>
        <div class="flex justify-center align-center m-auto">
            <button id="cancelButton"
                class="mr-2 px-2 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Cancel</button>

            <!-- Form for Deletion -->
            <form method="POST" id="deleteForm" action="{{ route('user.destroy', $user->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-2 py-1 bg-red-600 text-white rounded-md hover:bg-red-700">Delete</button>
            </form>
        </div>
    </div>
</div>

<div class="options">
    <span>Rows per page:</span>
    <select>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="50">50</option>
    </select>
    <span>1-1 of 1</span>
    <button disabled>&lt;</button>
    <button disabled>&gt;</button>
</div>

<style>
    table {
        table-layout: fixed;
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1%;
    }

    tr:nth-child(odd) {
        background-color: lightcyan;
    }

    th,
    td {
        padding: 8px 12px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #f4f4f4;
    }

    td img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        border: 2px double rgb(11, 172, 241);
    }

    .options {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 1%;
    }

    table .actions {
        display: flex;
        gap: 10px;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    /* Overlay for background blur */
    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(5px);
        z-index: 9;
    }

    /* Popup styling */
    #deleteConfirmation {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        padding: 20px;
        z-index: 10;
        width: 300px;
        transition: opacity 0.3s ease;
        opacity: 0;
    }

    #deleteConfirmation:not(.hidden) {
        opacity: 1;
    }

    .popup-content {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
</style>

<script>
    function showDeleteConfirmation(event, userName, userId) {
        const popup = document.getElementById('deleteConfirmation');
        const overlay = document.getElementById('overlay');
        const userNameDisplay = document.getElementById('userName');

        // Set the username in the popup
        userNameDisplay.textContent = userName;

      
        // Show the overlay and the popup
        overlay.classList.remove('hidden');
        popup.classList.remove('hidden');

        // Hide the popup when cancel is clicked
        document.getElementById('cancelButton').onclick = function() {
            overlay.classList.add('hidden');
            popup.classList.add('hidden');
        };
    }

    // Hide overlay when clicking outside the popup
    document.getElementById('overlay').onclick = function() {
        this.classList.add('hidden');
        document.getElementById('deleteConfirmation').classList.add('hidden');
    };
</script>