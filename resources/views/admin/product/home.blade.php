<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="d-flex align-item-center justify-content-between">
                        <p>
                        {{ __('Create information for students') }}
                        <a href="{{ route('admin/products/create') }}">
                            <button style="margin-left: 20px; padding: 10px 20px; font-size: 16px; background-color: blue; color: white; border: none; cursor: pointer; border-radius: 5px;">
                            {{ __('+') }}
                            </button>
                        </a>
                        </p>
                       
                    </div>
                    <br>
                    <hr />
                    <br>
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif 

    <style>
        body{
           color: white;
        }
        .table-container {
            width: 100%;
            overflow-x: auto;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }
        th, td {
            border: 1px solid #ddd;
            border-color: #364050;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: rgba(31,41,55,255);
        }
        .badge {
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            font-size: 12px;
        }
        .active { background-color: green; }
        .inactive { background-color: gray; }
        .banned { background-color: red; }
        .actions button {
            padding: 5px;
            margin-right: 5px;
            border: none;
            cursor: pointer;
        }
        .edit { background-color: blue; color: white; }
        .delete { background-color: red; color: white; }
        
        @media (max-width: 768px) {
            th, td {
                padding: 8px;
                font-size: 14px;
            }
            .actions button {
                padding: 3px;
                font-size: 12px;
            }
        }
    </style>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Profile</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Age</th>
                    <th>Section</th>
                    <th>Contact</th>
                    <th>Year Level</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
    @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" class="w-10 h-10 rounded-full" alt="Profile Image">
    @else
        <span>No Image</span>
    @endif
</td>
                    <td>{{ $product->first_name }}</td>
                    <td>{{ $product->middle_name }}</td>
                    <td>{{ $product->last_name }}</td>
                    <td>{{ $product->age }}</td>
                    <td>{{ $product->section }}</td>
                    <td>{{ $product->contact }}</td>
                    <td>{{ $product->year_level}}</td>
                    <td>{{ $product->gender }}</td>
                    <td class="actions">
                        <a href="{{ route('admin/products/edit', ['id'=>$product->id]) }}">
                            <button class="edit">✏️</button>
                        </a>
                        <form action="{{ route('admin/products/destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete">🗑️</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="10" class="text-center">Product not found</td>
                </tr>
                @endforelse
            </tbody>
        </table>

                </div>
                
            </div>
            <br>
            
        </div>
        
    </div>
    
</x-app-layout>
