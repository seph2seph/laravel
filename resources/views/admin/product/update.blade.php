<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Info') }}
        </h2>
    </x-slot>
    <a href="{{ route('admin/products') }}">
                            <button style="width: 50px; margin-top: 20px; margin-left: 20px; padding: 10px 20px; font-size: 16px; background-color: blue; color: white; border: none; cursor: pointer; border-radius: 5px;">
                            {{ __('⤶') }}
                            </button>
                        </a>
    <style>
        .container {
            position: relative;
            margin-top: 30px;
            margin-left: 450px;
            width: 90%;
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            color: black;
        }
        button {
            background-color: #5cb85c;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1rem;
        }
        button:hover {
            background-color: #4cae4c;
        }
        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }
            input, select, textarea, button,  {
                font-size: 0.9rem;
            }
    }
</style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Edit Product") }}
                   <hr />
                <form action="{{ route('admin/products/update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label for="image">Profile:</label>
            <input type="file" id="image" name="image" value="{{ $product->image }}" enctype="multipart/form-data">
            @error('image')
                <div class="text-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="{{ $product->first_name }}" required >
            @error('first_name')
                <div class="text-danger" role="alert">
                    {{ $message }}
            @enderror

            <label for="middle_name">Middle Name:</label>
            <input type="text" id="middle_name" name="middle_name" value="{{ $product->middle_name }}" required  >
            @error('middle_name')
                <div class="text-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="{{ $product->last_name }}" required>
            @error('last_name')
                <div class="text-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="{{ $product->age }}" required>

            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="{{ $product->contact }}">
            @error('contact')
                <div class="text-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror

            <label for="section">Section:</label>
            <select id="section" name="section" value="{{ $product->section }}" required>
                <option value="">Select</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
            </select>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="{{ $product->gender }}" required>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>


            <button type="submit" style="background-color:#856305;">Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
