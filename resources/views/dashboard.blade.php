@vite(['resources/sass/dashboard.scss'])

<x-layout.main>
    <!--Table-->
    <section class="table">
        <table>
            <tr>
                <th>Quarter</th>
                <th>Course</th>
                <th>Assessment</th>
                <th>ECs</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td rowspan="3">Q1-4</td>
                <td>Personal Professional Development Exploration</td>
                <td>Interview</td>
                <td class="credits">12.5</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <!-- Q1-4 -->
                <td>IT Personality 1</td>
                <td>Portfolio</td>
                <td class="credits">1.25</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <!-- Q1-4 -->
                <td>IT Personality 2</td>
                <td>Portfolio</td>
                <td class="credits">1.25</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <td rowspan="3">Q1</td>
                <td>Program and Career Orientation</td>
                <td>Individual Presentation</td>
                <td class="credits">2.5</td>
                <td class=" grade">9.1</td>
            </tr>
            <tr>
                <!-- Q1 -->
                <td>Computer Science Basics</td>
                <td>Written Knowledge</td>
                <td class="credits">5</td>
                <td class="grade">9.3</td>
            </tr>
            <tr>
                <!-- Q1 -->
                <td>Programming Basics</td>
                <td>Case Study</td>
                <td class="credits">5</td>
                <td class="grade">8.4</td>
            </tr>
            <tr>
                <td rowspan="2">Q2</td>
                <td rowspan="2">Object Oriented Programming</td>
                <td>Group Presentation</td>
                <td class="credits">5</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <!-- Q2 -->
                <!-- Object Oriented Programming -->
                <td>Written Knowledge</td>
                <td class="credits">5</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <td rowspan="5">Q3</td>
                <td>Business IT Consultancy</td>
                <td>Video</td>
                <td class="credits">2.5</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <!-- Q3 -->
                <td rowspan="4">Framework Project 1</td>
                <td>Database Exam</td>
                <td class="credits">1</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <!-- Q3 -->
                <!-- Framework Project 1 -->
                <td>Group Portfolio</td>
                <td class="credits">2.5</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <!-- Q3 -->
                <!-- Framework Project 1 -->
                <td>Group Presentation</td>
                <td class="credits">2.5</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <!-- Q3 -->
                <!-- Framework Project 1 -->
                <td>On-site Case Study</td>
                <td class="credits">4</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <td rowspan="3">Q4</td>
                <td rowspan="3">Framework Project 2</td>
                <td>Final Group Delivery</td>
                <td class="credits">2.5</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <!-- Q4 -->
                <!-- Framework Project 2-->
                <td>Individual Project Assessment</td>
                <td class="credits">2.5</td>
                <td class="grade">0</td>
            </tr>
            <tr>
                <!-- Q4 -->
                <!-- Framework Project 2-->
                <td>IT Development Portfolio</td>
                <td class="credits">5</td>
                <td class="grade">0</td>
            </tr>
        </table>
    </section>
    <!-- EC Progress -->
    <section class="progress">
        <h2>EC Progress</h2>
        <div>
            <div id="progress-bar"></div>
        </div>
        <h3 id="total-ec">Total ECs: 0</h3>
    </section>
    <!--Aside menu-->
    <section class="aside">
        <aside>
            <h3>Useful Sites</h3>
            <ul>
                <li>
                    <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/CER-HZ-Bachelor-full-time-2023-2024-DEF-version-20240412.pdf"
                       target="_blank">Course and Examination Regulations</a>
                </li>
                <li>
                    <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/TWE/IR-B-HBO-ICT-full-time-2023-2024-DEF.pdf"
                       target="_blank">Implementation Regulations</a>
                </li>
                <li>
                    <a href="https://learn.hz.nl/my/" target="_blank">Learn Environment</a>
                </li>
                <li>
                    <a href="https://hz.osiris-student.nl/voortgang" target="_blank">Study Progress</a>
                </li>
                <li>
                    <a href="https://github.com/HZ-HBO-ICT" target="_blank">GitHub Environment</a>
                </li>
            </ul>
        </aside>
    </section>
</x-layout.main>
