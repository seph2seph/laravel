<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Information') }}
        </h2>
    </x-slot>
    
    <a href="{{ route('admin/products') }}">
        <button style="width: 50px; margin-top: 20px; margin-left: 20px; padding: 10px 20px; font-size: 16px; background-color: blue; color: white; border: none; cursor: pointer; border-radius: 5px;">
            {{ __('⤶') }}
        </button>
    </a>
    

    <style>
        .container {
            margin-top: 30px;
            max-width: 600px;
            margin-left: 450px;
            width: 100%;
            background: #1f2937;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: white;
        }
        label {
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0 10px;
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
            margin-top: 10px;
        }
        button:hover {
            background-color: #4cae4c;
        }
        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }
            input, select, textarea, button {
                font-size: 0.9rem;
            }
    }
</style>
    <div class="container">
        <h2>Student Information Form</h2>
        <hr />
        @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('admin/products/store') }}" method="POST" enctype="multipart/form-data">
            @csrf


             
            <label for="lrn">LRN:</label>
            <input type="tel" id="lrn" name="lrn" required>
            @error('lrn')
                <div class="text-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror

            <label for="image">Profile:</label>
            <input type="file" id="image" name="image" enctype="multipart/form-data">
            @error('image')
                <div class="text-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
           
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
            @error('first_name')
                <div class="text-danger" role="alert">
                    {{ $message }}
            @enderror

            <label for="middle_name">Middle Name:</label>
            <input type="text" id="middle_name" name="middle_name" required>
            @error('middle_name')
                <div class="text-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
            @error('last_name')
                <div class="text-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact">
            @error('contact')
                <div class="text-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror

            <label for="section">Section:</label>
            <select id="section" name="section" required>
                <option value="">Select</option>
                <option value="Gladiolus">Gladiolus</option>
                <option value="Rose">Rose</option>
                <option value="Jupitor">Jupitor</option>
                <option value="Mars">Mars</option>
            </select>
                
            <label for="year_level">Year Level:</label>
            <select id="year_level" name="year_level" required>
                    <option value="">Select</option>
                    <option value="1">Grade 1</option>
                    <option value="2">Grade 2</option>
                    <option value="3">Grade 3</option>
                    <option value="4">Grade 4</option>
                    <option value="5">Grade 5</option>
                    <option value="6">Grade 6</option>
            </select>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            @error('address')
                <div class="text-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            

            <button type="submit">Submit</button>
        </form>
    </div>

    
   

</x-app-layout>
