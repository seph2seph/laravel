
<header>
        <h1>List of Students</h1>
        
    
        <div class="link">
            <a href="{{ route('home')}}">↩</a>
        </div>

    </header>
<section>
        <link rel="stylesheet" href="{{ asset('assets/css/search_web.css') }}">
        <div class="search-container">
            <select class="grade-dropdown" id="gradeDropdown">
                <option value="">All Grades</option>
                @foreach($yearLevels as $yearLevel)
                    <option value="{{ $yearLevel }}"> 
                        {{ $yearLevel }}
                    </option>
                @endforeach
            </select>
            <input type="text" class="search-box" id="searchInput" placeholder="Enter student name or details...">
            <button class="search-button" onclick="searchStudents()">Search</button>
        </div>
    
        <div class="results-list" id="results">
    
        </div>
    </section>
    
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

    
    <script>
        function searchStudents() {
    const query = document.getElementById("searchInput").value.toLowerCase();
    const selectedGrade = document.getElementById("gradeDropdown").value;
    const resultsContainer = document.getElementById("results");

    resultsContainer.innerHTML = '';

    const students = [

    ];

    const filteredStudents = students.filter(student => 
        (selectedGrade === '' || student.grade === selectedGrade) &&
        (student.name.toLowerCase().includes(query) || student.details.toLowerCase().includes(query))
    );

    if (filteredStudents.length > 0) {
        filteredStudents.forEach(student => {
            const studentElement = document.createElement("div");
            studentElement.className = "result-item";
            studentElement.innerHTML = `
                <div class="profile">
                    <img src="${student.image}" alt="${student.name}" class="profile-image">
                    <div class="profile-info">
                        <h3>${student.name}</h3>
                        <p>${student.details}</p>
                        <p>Age: ${student.age}</p>
                        <p>Gender: ${student.gender}</p>
                    </div>
                </div>
            `;
            resultsContainer.appendChild(studentElement);
        });
    } else {
        const noResult = document.createElement("p");
        noResult.textContent = "No students found.";
        resultsContainer.appendChild(noResult);
    }
}

    </script>