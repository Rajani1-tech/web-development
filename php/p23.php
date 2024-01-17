<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Content Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>File Content Table</h1>

    <?php
    $filename1 = 'hi.txt';
    $filename2 = 'web.txt';

    // Check if both files exist
    if (file_exists($filename1) && file_exists($filename2)) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Column 1</th>'; // Replace with actual column headers for file1
        echo '<th>Column 2</th>'; // Replace with actual column headers for file2
        // Add more header cells if needed

        echo '</tr>';

        // Read the files line by line and display data in the table
        $file1 = fopen($filename1, 'r');
        $file2 = fopen($filename2, 'r');

        while (true) {
            $line1 = fgets($file1);
            $line2 = fgets($file2);

            // Check if both lines are empty (end of both files)
            if ($line1 === false && $line2 === false) {
                break;
            }

            $data1 = explode("\t", $line1); // Assuming tab-separated values for file1
            $data2 = explode("\t", $line2); // Assuming tab-separated values for file2

            echo '<tr>';
            foreach ($data1 as $value) {
                echo '<td>' . htmlspecialchars($value) . '</td>';
            }

            foreach ($data2 as $value) {
                echo '<td>' . htmlspecialchars($value) . '</td>';
            }

            echo '</tr>';
        }

        fclose($file1);
        fclose($file2);

        echo '</table>';
    } else {
        echo 'One or both files not found.';
    }
    ?>

</body>
</html>
