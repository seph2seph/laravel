
<header>
        <h1>Search Student</h1>
        <div class="link">
            <a href="">Home</a>
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