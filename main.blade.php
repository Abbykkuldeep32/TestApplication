
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#yourForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: '/your-endpoint',
                data: $(this).serialize(),
                success: function(response) {
                    // Handle success, update the frontend as needed
                    console.log(response.message);
                },
                error: function(error) {
                    // Handle errors
                    console.log(error.responseJSON.message);
                }
            });
        });
    });
</script>

<!-- Your HTML form -->
<form id="yourForm">
    <!-- Your form fields go here -->
    <button type="submit">Submit</button>
</form>
