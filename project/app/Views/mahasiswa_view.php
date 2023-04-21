<html>

<head>
    <style>

    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <h2 align="center"><u>Facebook Style Infinite Scroll Pagination in Codeigniter using Ajax</u></h2>
        <br />
        <div id="load_data"></div>
        <div id="load_data_message"></div>
        <table>
            <thead>
                <th>id</th>
                <th>first name</th>
                <th>last name</th>
                <th>email</th>
                <th>University</th>
            </thead>

            <tbody id="hasil">
                <?php $nomor = 0;
                foreach($dataMahasiswa as $values) {
                  $nomor++;
                ?>
                <tr>
                    <td><?= $nomor?></td>
                    <td><?= $values->first_name; ?></td>
                    <td><?= $values->last_name; ?></td>
                    <td><?= $values->email; ?></td>
                    <td><?= $values->university; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>

    <div id="loading"></div>
    <table id="res">

    </table>
    <script type="text/javascript">
        // $(document).ready(function(){
        //     var lim = 30;
        //     var start = 0;
        //      $(window).scroll(function(){
        //         if($(window).scrollTop() + $(window).height()>$("#hasil").height()){
        //             start= start+lim;
        //             $("#loading").html("<center>load data please wait...</center>");
        //             setTimeout(function(){
        //                 load(lim,start);
        //             },2000);
        //         }
        //      });


        //     function load(limit,start){
        //         $.ajax({
        //             url:"<?php echo base_url();?>ajax",
        //             method: "POST",
        //             data:{lim:lim,start:start},
        //             cache: false,
        //             success: function(data){
        //                 if(data=="empty"){
        //                     $("#loading").html("<p>No data found</p>");
        //                 }
        //                 else{
        //                     $("#loading").html("");
        //                     $("#res").append(data);
        //                 }
        //                 $("#loading").html(data);
        //             }
        //         });
        //     }

        // });
        $(window).scroll(function () {
    // End of the document reached?
    if ($(document).height() - $(this).height() == $(this).scrollTop()) {
        alert('Scrolled to Bottom');
    }
});
    </script>
</body>

</html>