<?php
// Database connection parameters
include("../Security/Connection.php");
// SQL query to retrieve the sum of Male and Female counts by date
$query = "SELECT Date, SUM(Male) AS TotalMale, SUM(Female) AS TotalFemale FROM visitors GROUP BY Date";
$result = $conn->query($query);

// Initialize arrays to store the date (x-values) and total counts (y-values)
$xValues = [];
$yValues = [];

// Fetch and store the data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $xValues[] = $row['Date'];
        $yValues[] = $row['TotalMale'] + $row['TotalFemale'];
    }
}

// Close database connection
$conn->close();
?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const xValues = <?php echo json_encode($xValues); ?>;
        const yValues = <?php echo json_encode($yValues); ?>;

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: yValues,
                    label: "Visitors"
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'ISKCON Visitor Counts per Date'
                },
                scales: {
                    yAxes: [{ ticks: { min: 0 } }],
                }
            }
        });
    });
</script>
<!-- Second Chart -->
<?php
// Database connection details
include("../Security/Connection.php");

// SQL query to fetch DOB data
$query = "SELECT DOB FROM users";
$result = $conn->query($query);

// Initialize an associative array to store age counts
$ageCounts = [];

// Calculate ages and count people at each age
while ($row = $result->fetch_assoc()) {
    $dob = new DateTime($row['DOB']);
    $current = new DateTime();
    $now = $current->format("Y-m-d"); // Format as "Y-m-d"

    // Calculate the age
    $age = $dob->diff($current)->y;

    // Increment the count for the specific age
    if (isset($ageCounts[$age])) {
        $ageCounts[$age]++;
    } else {
        $ageCounts[$age] = 1;
    }
}

// Close the database connection
$conn->close();

// Prepare data for JSON response
$responseData = [];
foreach ($ageCounts as $age => $count) {
    $responseData[] = [
        'age' => $age,
        'count' => $count,
    ];
}

// Convert the data to JSON format
$jsonData = json_encode($responseData);
?>


<!-- Second Chart Script -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Your JSON data (replace with your actual data)
        const responseData = <?php echo $jsonData; ?>;

        const ageData = responseData.map(item => item.count); // Number of people
        const ageLabels = responseData.map(item => item.age); // Age labels

        // Create the line chart
        new Chart("myChart1", {
            type: "line",
            data: {
                labels: ageLabels, // Age labels on the x-axis
                datasets: [
                    {
                        data: ageData, // Number of people on the y-axis
                        borderColor: getRandomColor(),
                        fill: false,
                        label: "People Cound by Age",
                    }
                ],
            },
            options: {
                legend: {
                    display: true,
                    position: 'bottom',
                },
            },
        });

        // Function to generate random colors (optional)
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    });
</script>


<?php
// Database connection details
include '../Security/Connection.php';

// Query to fetch data from the database
$query = "SELECT Center, COUNT(*) AS Count FROM contact GROUP BY Center";
$result = $conn->query($query);

// Create arrays to store the data
$centers = array();
$counts = array();
while ($row = $result->fetch_assoc()) {
    $centers[] = $row['Center'];
    $counts[] = $row['Count'];
}

// Close the database connection
$conn->close();
?>
<script>
    document.addEventListener("DOMContentLoaded", function () {

        var xValues = <?php echo json_encode($centers); ?>;
        var yValues = <?php echo json_encode($counts); ?>;
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"

        ];

        new Chart("myChart2", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Registered Devotees on Different Centers"
                }
            }
        });
    });
</script>

<!-- Bar Chart -->
<?php
// Database connection parameters
include("../Security/Connection.php");

// SQL query to retrieve the 4 most recent events with their visitor counts
$query = "SELECT e.Event_Name, v.Date, SUM(v.Male) AS TotalMale, SUM(v.Female) AS TotalFemale
          FROM event e
          LEFT JOIN visitors v ON e.Event_Date = v.Date
          GROUP BY e.Event_Name, v.Date
          ORDER BY v.Date DESC
          LIMIT 4";
$result = $conn->query($query);

// Initialize arrays to store data for the chart
$xValues = [];
$yValues = [];
$barColors = ["red", "green", "blue", "orange"]; // Define 4 bar colors

// Fetch and store the data
while ($row = $result->fetch_assoc()) {
    $xValues[] = $row['Event_Name'];
    $yValues[] = $row['TotalMale'] + $row['TotalFemale'];
}

// Close database connection
$conn->close();
?>

<!-- JavaScript chart code -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var xValues = <?php echo json_encode($xValues); ?>;
        var yValues = <?php echo json_encode($yValues); ?>;
        var barColors = <?php echo json_encode($barColors); ?>;

        new Chart("myChart3", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: { display: false },
                title: {
                    display: true,
                    text: "Festival Visitor Count"
                }
            }
        });
    });
</script>
