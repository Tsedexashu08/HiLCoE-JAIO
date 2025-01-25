<div id="deleteConfirmation" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h2 class="text-lg font-semibold mb-4">Confirm Deletion</h2>
        <p class="text-gray-600 mb-6">Are you sure you want to delete this item? This action cannot be undone.</p>
        <div class="flex justify-end">
            <button id="cancelButton" class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Cancel</button>
            <button id="confirmButton" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Delete</button>
        </div>
    </div>
</div>

<script>
    function showDeleteConfirmation(event) {
        const popup = document.getElementById('deleteConfirmation');
        const button = event.target;

        // Calculate the position of the button
        const rect = button.getBoundingClientRect();
        popup.style.top = `${rect.top - rect.height - 10}px`; // Position above the button
        popup.style.left = `${rect.left}px`; // Align with the button

        // Show the popup
        popup.classList.remove('hidden');

        // Hide the popup when cancel is clicked
        document.getElementById('cancelButton').onclick = function() {
            popup.classList.add('hidden');
        };

        // Confirm deletion action
        document.getElementById('confirmButton').onclick = function() {
            // Perform deletion logic here
            alert('Item deleted!'); // Example action
            popup.classList.add('hidden');
        };
    }
</script>
