<?php
include '../db.php';

$i = 0;

$sql = "SELECT * from news_items";

$run_query = mysqli_query($db, $sql);

if (mysqli_num_rows($run_query) > 0) {
    while ($row1 = mysqli_fetch_assoc($run_query)) {

        $i++;

        echo '<tr id="trck' . $row1['id'] . '">
                                       <td><div class="badge bg-primary text-white rounded-pill">' . $row1['first_showing_date'] . '</div></td>
                                        <td><div class="badge bg-primary text-white rounded-pill">' . $row1['last_showing_date'] . '</div></td>
                                        <td>' . $row1['news_description'] . '</td>
                                        <td>' . $row1['news_added_by'] . '</td>
                                        <td>
                                        <a onclick="deleteNewsItem(' . $row1['id'] . ')"  href="#" class="btn btn-datatable btn-icon btn-transparent-dark" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                       </td>

                                    </tr>';
    }
}

?>
<script>


</script>