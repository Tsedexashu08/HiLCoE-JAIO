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
                        <span id="deleteButton" onclick="showDeleteConfirmation(event, '{{ $user->id }}')">
                            <x-delete-button />
                        </span>
                        <span><x-show-button /></span>
                        <span><x-view-button /></span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  <!-- Confirmation Popup -->
<div id="deleteConfirmation" class="absolute left-5 hidden bg-white rounded-lg shadow-lg p-4 w-64 z-10">
    <div class="relative">
        <h2 class="text-sm font-semibold mb-2">Confirm Deletion</h2>
        <p class="text-gray-600 text-xs mb-4">Are you sure you want to delete this item?</p>
        <div class="flex justify-end">
            <button id="cancelButton"
                class="mr-2 px-2 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Cancel</button>

            <!-- Form for Deletion -->
            <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                @csrf
                @method('DELETE') <!-- Specify the DELETE method -->
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
            height: 100%;
            justify-content: center;
            align-items: center;
            padding: 20px;

        }

        #deleteConfirmation {
            transition: opacity 0.3s ease;
            opacity: 0;
        }

        #deleteConfirmation:not(.hidden) {
            opacity: 1;
        }
    </style>
    <script>
        function showDeleteConfirmation(event, userId) {
            const popup = document.getElementById('deleteConfirmation');
            const button = event.target.closest('#deleteButton'); // Get the closest delete button

            // Calculate the position of the button
            const rect = button.getBoundingClientRect();
            popup.style.top = `${rect.top - popup.offsetHeight - 5}px`; // Position directly above the button
            popup.style.left = `${rect.left + rect.width / 2 - popup.offsetWidth / 2}px`; // Center above the button

            // Show the popup
            popup.classList.remove('hidden');

            // Hide the popup when cancel is clicked
            document.getElementById('cancelButton').onclick = function() {
                popup.classList.add('hidden');
            };

            // Confirm deletion action
            document.getElementById('confirmButton').onclick = function() {
                // Perform deletion logic here
                popup.classList.add('hidden');
            };
        }
    </script>
