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

    <div class="results-list" id="results"></div>
</section>

<script>
    // Parse Laravel products data into JavaScript
    const students = @json($products);

    function searchStudents() {
        const query = document.getElementById("searchInput").value.toLowerCase();
        const selectedGrade = document.getElementById("gradeDropdown").value;
        const resultsContainer = document.getElementById("results");

        resultsContainer.innerHTML = '';

        // Transform Laravel data into a proper JavaScript array
        const studentData = students.map(student => ({
            name: `${student.first_name} ${student.middle_name} ${student.last_name}`,
            age: student.age,
            section: student.section,
            contact: student.contact,
            gender: student.gender,
            grade: String(student.year_level),  // Ensure it's a string for comparison
            image: student.image ? `{{ asset('storage/') }}/${student.image}` : '{{ asset('storage/default.png') }}' // Handle missing images
        }));

        console.log(studentData); // Debugging

        // Filter students based on search input and selected grade
        const filteredStudents = studentData.filter(student => 
            (selectedGrade === '' || student.grade === selectedGrade) &&
            student.name.toLowerCase().includes(query)
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
                            <p>Age: ${student.age}</p>
                            <p>Section: ${student.section}</p>
                            <p>Contact: ${student.contact}</p>
                            <p>Gender: ${student.gender}</p>
                            <p>Grade: ${student.grade}</p>    
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
