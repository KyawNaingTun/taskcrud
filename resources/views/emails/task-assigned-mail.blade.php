<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    <style>
        /* Base */

        body, body *:not(html):not(style):not(br):not(tr):not(code) {
            font-family: Avenir, Helvetica, sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: #f5f8fa;
            color: #74787E;
            height: 100%;
            hyphens: auto;
            line-height: 1.4;
            font-size: 14px;
            margin: 0;
            -moz-hyphens: auto;
            -ms-word-break: break-all;
            width: 100% !important;
            -webkit-hyphens: auto;
            -webkit-text-size-adjust: none;
            word-break: break-all;
            word-break: break-word;
        }

        p,
        ul,
        ol,
        blockquote {
            line-height: 1.4;
            text-align: left;
        }

        a {
            color: #3869D4;
        }

        a img {
            border: none;
        }

        /* Typography */

        h1 {
            color: #2F3133;
            font-size: 19px;
            font-weight: bold;
            margin-top: 0;
            text-align: left;
        }

        h2 {
            color: #2F3133;
            font-size: 16px;
            font-weight: bold;
            margin-top: 0;
            text-align: left;
        }

        h3 {
            color: #2F3133;
            font-size: 14px;
            font-weight: bold;
            margin-top: 0;
            text-align: left;
        }

        p {
            color: #74787E;
            font-size: 16px;
            line-height: 1.5em;
            margin-top: 0;
            text-align: left;
        }

        p.sub {
            font-size: 12px;
        }

        img {
            max-width: 100%;
        }

        /* Layout */

        .wrapper {
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            width: 100%;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 100%;
        }

        .content {
            margin: 0;
            padding: 0;
            width: 100%;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 100%;
        }
        .content-text{
            padding: 0 35px;
        }
        /* Header */

        .header {
            padding: 25px 0;
            text-align: center;
        }

        .header a {
            color: #bbbfc3;
            font-size: 19px;
            font-weight: bold;
            text-decoration: none;
            text-shadow: 0 1px 0 white;
        }

        /* Body */

        .body {
            background-color: #FFFFFF;
            border: 0;
            margin: 0;
            padding: 0;
            width: 100%;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 100%;
        }

        .inner-body {
            background-color: #FFFFFF;
            border:2px solid #d7d7d7;
            margin: 0 auto;
            padding: 0;
            width: 570px;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 570px;
        }
        .task-detail-box{
            background-color: #000000;
            padding:10px 35px;
            width:570px;
            color:#ffffff;
        }
        .action-btn{
            padding-left:35px;
        }
        /* Task list */
        .task-list{
            padding: 35px;
        }
        .task-list-label{
            font-weight: bolder;
            width:200px;
        }
        /* Saluation */
        .saluation-text{
            padding-left:35px;
        }
        /* Subcopy */

        .subcopy {
            border-top: 1px solid #EDEFF2;
            margin-top: 25px;
            padding: 25px 35px 50px 35px;
        }

        .subcopy p {
            font-size: 12px;
        }

        /* Footer */

        .footer {
            margin: 0 auto;
            margin-top:20px;
            margin-bottom: 40px;
            padding: 0;
            text-align: center;
            width: 570px;
            font-size: 12px;
            color: #a2a2a2;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 570px;
        }

        .footer p {
            color: #AEAEAE;
            font-size: 12px;
            text-align: center;
        }

        /* Tables */

        .table table {
            margin: 30px auto;
            width: 100%;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 100%;
        }

        .table th {
            border-bottom: 1px solid #EDEFF2;
            padding-bottom: 8px;
            margin: 0;
        }

        .table td {
            color: #74787E;
            font-size: 15px;
            line-height: 18px;
            padding: 10px 0;
            margin: 0;
        }

        .content-cell {
            padding: 0px;
        }
        .greeting-text{
            padding: 35px 35px 0px 35px;
        }

        /* Buttons */

        .action {
            margin: 30px auto;
            padding: 0;
            text-align: center;
            width: 100%;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 100%;
        }

        .button {
            border-radius: 3px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
            color: #FFF;
            display: inline-block;
            text-decoration: none;
            -webkit-text-size-adjust: none;
        }
        .text-red{
            color: #E12427;
        }
        .button-red,
        .button-error {
            background-color: #E12427;
            border: 1px solid #bf5329;
            padding:5px 10px;
        }

        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>

    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0">
                    <!-- START HEADER -->
                    <tr>
                        <td align="center" style="padding: 50px 5px 5px 5px;">
                            <a href="{{ config('app.url') }}" target="_blank">
                                <img src="https://www.benlineagencies.com/wp-content/themes/bootstrap-basic/img/BenLine_Logo.png" alt="Logo" style="width:186px;border:0;"/>
                            </a>
                        </td>
                    </tr>
                    <!-- END OF HEADER -->

                    <!-- START EMAIL BODY -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        {{-- Greeting --}}
                                        <table>
                                            <tr>
                                                <td class="greeting-text" width="100%" cellpadding="35">
                                                    <h2>Hello {{ $assignee->name }},</h2>
                                                </td>
                                            </tr>
                                        </table>

                                        <table>
                                            <tr>
                                                <td class="content-text" width="100%" cellpadding="35">
                                                    <p>A new task ({{ $task->company.' - '.$task->subject }}) assigned to you.</p>
                                                </td>
                                            </tr>
                                        </table>

                                        <table class="" align="center" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td class="task-detail-box" width="100%" cellpadding="0" cellspacing="0">
                                                    Task Detail
                                                </td>
                                            </tr>
                                        </table>

                                        <table class="task-list">
                                            <tr>
                                                <td class="task-list-label">Subject/Objective</td> <td>{{ $task->subject }}</td>
                                            </tr>
                                            <tr>
                                                <td class="task-list-label">Due Date</td> <td>{{ $task->due_at->format('Y-m-d h:i A') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="task-list-label">Priority</td> <td>{{ $task->priority }}</td>
                                            </tr>
                                            <tr>
                                                <td class="task-list-label">Task Type</td> <td>{{ $task->type }}</td>
                                            </tr>
                                            <tr>
                                                <td class="task-list-label">Company</td> <td>{{ $task->company }}</td>
                                            </tr>
                                            <tr>
                                                <td class="task-list-label">Contact</td> <td>{{ $task->contact }}</td>
                                            </tr>
                                            <tr>
                                                <td class="task-list-label">Created By</td> <td>{{ $task->creator->name }}</td>
                                            </tr>

                                        </table>

                                        {{-- Action Button --}}
                                        <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="left">
                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td align="left">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td class="action-btn">
                                                                            <a href="{{ route('task.show', ['id'=>$task->id]) }}" class="button button-red" target="_blank">View Task</a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>

                                        {{-- Outro Lines --}}

                                        {{-- Salutation --}}
                                        <table class="saluation-text">
                                            <tr>
                                                <td class="" width="100%" cellpadding="35">
                                                    @lang('Regards'),<br> <strong>{{ config('app.name') }}</strong>
                                                </td>
                                            </tr>
                                        </table>

                                        {{-- Subcopy --}}
                                        <table class="subcopy" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td>
                                                    <p>If you’re having trouble clicking the "View Task" button, copy and paste the URL below into your web browser:
                                                        <a href="{{ route('task.show', ['id'=>$task->id]) }}" class="text-red">{{ route('task.show', ['id'=>$task->id]) }}</a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- END OF EMAIL BODY -->

                    <!-- START FOOTER -->
                    <tr>
                        <td>
                            <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="content-cell" align="center">
                                        © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- END OF FOOTER -->
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
