<header>
    <h1>List of Students</h1>
    <div class="link">
        <a href="{{ route('home') }}">↩</a>
    </div>
</header>

<section class="content">
    <link rel="stylesheet" href="{{ asset('assets/css/search_web.css') }}">

    <div class="search-container">
        <select class="grade-dropdown" id="gradeDropdown">
            <option value="">All Grades</option>
            @foreach($yearLevels as $yearLevel)
                <option value="{{ $yearLevel }}">{{ $yearLevel }}</option>
            @endforeach
        </select>
        <input type="text" class="search-box" id="searchInput" placeholder="Enter student name or details...">
        <button class="search-button" onclick="searchStudents()">Search</button>
    </div>

    <div class="result-container">
        <div class="results-list" id="results"></div>
    </div>
</section>

<footer class="footer">
      <div class="footer-container">
        <div class="footer-about">
          <h3>About BlueBox</h3>
          <p>BlueBox is your trusted platform for seamless student information management. Empowering students and educators every step of the way.</p>
        </div>
        <div id="footer-contact">
          <h3>Contact Us</h3>
          <p>Email: support@bluebox.com</p>
          <p>Phone: +1 234 567 890</p>
          <p>Address: 123 BlueBox Lane, Learning City</p>
        </div>
      </div>
      <div id="footer-bottom">
        <p>&copy; 2025 BlueBox. All rights reserved.</p>
      </div>
    </footer>
<script>
    const baseStoragePath = "{{ asset('storage/') }}";
    const defaultImage = "{{ asset('storage/boyImage.png') }}";
    
    const students = @json($products);

    function searchStudents() {
        const query = document.getElementById("searchInput").value.toLowerCase();
        const selectedGrade = document.getElementById("gradeDropdown").value;
        const resultsContainer = document.getElementById("results");

        resultsContainer.innerHTML = '';

        const studentData = students.map(student => ({
            name: `${student.first_name} ${student.middle_name} ${student.last_name}`,
            lrn: student.lrn,
            age: student.age,
            section: student.section,
            contact: student.contact,
            gender: student.gender,
            address: student.address,
            grade: String(student.year_level),
            image: student.image 
                ? `${baseStoragePath}/${student.image}` 
                : defaultImage
        }));

        const filteredStudents = studentData.filter(student => 
            (selectedGrade === '' || student.grade === selectedGrade) &&
            student.name.toLowerCase().includes(query)
        );

        if (filteredStudents.length > 0) {
            filteredStudents.forEach(student => {
                resultsContainer.appendChild(createStudentElement(student));
            });
        } else {
            resultsContainer.appendChild(createNoResultElement());
        }
    }

    function createStudentElement(student) {
        const studentElement = document.createElement("div");
        studentElement.className = "result-item";
        studentElement.innerHTML = `
            <div class="profile">
                <img src="${student.image}" alt="${student.name}" class="profile-image">
                <div class="profile-info">
                    <h3 class ="student-name">${student.name}</h3>
                    <p class="student-lrn">LRN: ${student.lrn}</p>
                    <p class="student-age">Age: ${student.age}</p>
                    <p class="student-contact">Contact: ${student.contact}</p>
                    <p>Section: ${student.section}</p>
                    <p>Gender: ${student.gender}</p>
                    <p>Grade: ${student.grade}</p>
                    <p>Address: ${student.address}</p>
                </div>
            </div>
        `;
        return studentElement;
    }

    function createNoResultElement() {
        const noResult = document.createElement("p");
        noResult.textContent = "No students found.";
        return noResult;
    }
</script>
