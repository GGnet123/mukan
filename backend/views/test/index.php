<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<div style="display: flex;">
    <div>
        <div>
            <h3>Login Req</h2>

            <input type="text" placeholder="username" id="login_username">
            <input type="text" placeholder="password" id="login_password">
            <button id="login_send">Send</button>
        </div>
        <div style="margin-top: 10px; display: flex; flex-direction:column">
            <h3>Registrate</h2>

            <input type="text" placeholder="username" id="reg_username" style="margin-top: 10px;">
            <input type="text" placeholder="email" id="reg_email" style="margin-top: 10px;">
            <input type="text" placeholder="password" id="reg_password" style="margin-top: 10px;">
            <div style="display: flex; align-items:center">
                <strong>Is Teacher</strong> 
                <select id="reg_is_teacher" style="margin-left: 10px;margin-top: 10px;">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div style="display: flex; align-items:center">
                <strong>Is Admin</strong> 
                <select id="reg_is_admin" style="margin-left: 10px;margin-top: 10px;">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <button id="reg_send" style="margin-top: 10px; width: 60px;">Send</button>
        </div>
        <div style="margin-top: 10px; display: flex; flex-direction:column">
            <h3>Get List Of Courses</h2>

            <input type="number" placeholder="limit (default 10)" id="course_list_limit" style="margin-top: 10px;">
            <input type="number" placeholder="offset (default 0)" id="course_list_offset" style="margin-top: 10px;">
            
            <button id="get_courses_send" style="margin-top: 10px; width: 60px;">Send</button>
        </div>
        <div style="margin-top: 10px; display: flex; flex-direction:column">
            <h3>Get Details Of Course</h2>

            <input type="number" placeholder="course id" id="course_details_course_id" style="margin-top: 10px;">
        
            <button id="course_details_send" style="margin-top: 10px; width: 60px;">Send</button>
        </div>

        <div style="margin-top: 10px; display: flex; flex-direction:column">
            <h3>Get Course Content</h2>

            <input type="number" placeholder="course id" id="course_contents_course_id" style="margin-top: 10px;">
        
            <button id="course_contents_send" style="margin-top: 10px; width: 60px;">Send</button>
        </div>
    </div>
    
    <div style="margin-left: 250px">
        <h3>Response</h3>
        <pre id="response-body"></pre>
    </div>    
</div>

<script>
    $(function() {
        $('#course_contents_send').click(function() {
            let id = $('#course_contents_course_id').val()
            if (!id) {
                alert('Provide ID')
                return
            }
            let url = '/api/get-course-contents?id=' + id

            $.get(url, function(data) {
                $('#response-body').html(getStringResponse(data));
            })
        })
        $('#course_details_send').click(function() {
            let id = $('#course_details_course_id').val()
            if (!id) {
                alert('Provide ID')
                return
            }
            let url = '/api/get-course-details?id=' + id 

            $.get(url, function(data) {
                $('#response-body').html(getStringResponse(data));
            })
        })
        $('#get_courses_send').click(function() {
            let limit = $('#course_list_limit').val()
            let offset = $('#course_list_offset').val()

            let url = '/api/get-courses-list' + (limit && offset ? '?limit='+limit+'&offset='+offset : '')

            $.get(url, function(data) {
                $('#response-body').html(getStringResponse(data));
            })
        })
        $('#login_send').click(function() {
            let username = $('#login_username').val();
            let password = $('#login_password').val();

            $.post('/api/login', { username: username, password: password}, function(data) {
                $('#response-body').html(getStringResponse(data));
            })
        })

        $('#reg_send').click(function() {
            let username = $('#reg_username').val();
            let email = $('#reg_email').val();
            let password = $('#reg_password').val();
            let is_teacher = $('#reg_is_teacher').val();
            let is_admin = $('#reg_is_admin').val();

            $.post('/api/reg', { 
                username: username, 
                password: password, 
                email: email, 
                password: password, 
                is_teacher: is_teacher, 
                is_admin: is_admin
            }, function(data) {
                $('#response-body').html(getStringResponse(data));
            })
        })

        function getStringResponse(data) {
            let res = ''
            console.log(data)
            $.each(data, function( index, value ) {
                if (value instanceof Object) {
                    res += index + ': <br><div style="margin-left: 30px">' + getStringResponse(value) + '</div><br>'
                } else {
                    res += index + ': ' + value + '<br>';
                }
            });
            return res;
        }
    })
</script>