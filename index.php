<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>

    <style>
        form {
            display: flex;
            flex-direction: column;
        }

        input,
        button {
            border-radius: 8px;
            padding: 10px;
            border: 1px solid #eee;
            width: 280px;
            margin: 10px auto;
        }
    </style>
</head>

<body>

    <form action="#">

        <input type="text" id="jsName" placeholder="name">
        <input type="email" id="jsEmail" placeholder="email">
        <input type="number" id="jsPhone" placeholder="phone">
        <input type="password" id="jsPassword" placeholder="password">

        <button type="submit" id="jsInsert">insert</button>
        <button type="submit" id="jsDelete">delete</button>
        <button type="submit" id="jsSelect">select</button>
        <button type="submit" id="jsUpdate">update</button>

    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {

            $("#jsInsert").click(function(e) {
                e.preventDefault();
                var name = $("#jsName").val();
                var email = $("#jsEmail").val();
                var phone = $("#jsPhone").val();
                var password = $("#jsPassword").val();

                $.post(
                    "fetch/api/insert.php",
                    JSON.stringify({
                        tableName: "general_user",
                        record: [{
                                field: "general_user_name",
                                value: name,
                                type: "text"
                            },
                            {
                                field: "general_user_email",
                                value: email,
                                type: "email"
                            },
                            {
                                field: "general_user_phone",
                                value: phone,
                                type: "phone"
                            },

                            {
                                field: "general_user_password",
                                value: password,
                                type: "password"
                            }

                        ]

                    }),
                    function(data) {
                        alert(data);

                    }
                );

            });


            $("#jsDelete").click(function(e) {
                e.preventDefault();
                var name = $("#jsName").val();
                var email = $("#jsEmail").val();
                var phone = $("#jsPhone").val();
                var password = $("#jsPassword").val();


                $.post(
                    "fetch/api/delete.php",
                    JSON.stringify({
                        tableName: "general_user",
                        conditions: [{
                                field: "general_user_name",
                                condition: "=",
                                value: name

                            },
                            {
                                field: "general_user_email",
                                condition: "=",
                                value: email

                            },
                            {
                                field: "general_user_phone",
                                condition: "=",
                                value: phone,

                            },

                            {
                                field: "general_user_password",
                                condition: "=",
                                value: password,

                            }

                        ]

                    }),
                    function(data) {
                        alert(data);

                    }
                );

            });


            $("#jsSelect").click(function(e) {
                e.preventDefault();


                $.post(
                    "fetch/api/select.php",
                    JSON.stringify({
                        tableName: "general_user",
                        fields: [
                            "*"
                        ],
                        conditions: [{
                            field: "general_user_id",
                            condition: ">",
                            value: "0"
                        }]

                    }),
                    function(data) {
                        alert(data);

                    }
                );

            });

            $("#jsUpdate").click(function(e) {
                e.preventDefault();
                var name = $("#jsName").val();
                var email = $("#jsEmail").val();
                var phone = $("#jsPhone").val();
                var password = $("#jsPassword").val();

                $.post(
                    "fetch/api/update.php",
                    JSON.stringify({
                        tableName: "general_user",
                        record: [{
                                field: "general_user_name",
                                value: name,
                                type: "text"
                            },
                            {
                                field: "general_user_email",
                                value: email,
                                type: "email"
                            },
                            {
                                field: "general_user_phone",
                                value: phone,
                                type: "phone"
                            },

                            {
                                field: "general_user_password",
                                value: password,
                                type: "password"
                            }

                        ],
                        conditions: [{
                            field: "general_user_id",
                            condition: "=",
                            value: "2"
                        }]

                    }),
                    function(data) {
                        alert(data);

                    }
                );

            });

        });
    </script>
</body>

</html>