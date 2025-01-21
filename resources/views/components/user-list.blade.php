<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1%;
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

        #image {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
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
            height: fit-content;
            justify-content: center;
            align-items: center;
            
        }
    </style>
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
                <th>Profile picture</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>SOURCE</th>
                <th>WORKSPACE ROLE</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="image"><img src="{{ asset('images/dPpb6vgo9pj77jOL8uneYfbLtIA9cjFrJCAO4iAw.png') }}" alt="Profile Picture" </td>
                <td>Admin</td>
                <td>Admin</td>
                <td>LOCAL USERS</td>
                <td>Admin</td>
                <td class="actions">
                    <span><x-delete-button /></span>
                    <span><x-view-button /></span>
                </td>
            </tr>
        </tbody>
    </table>
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
