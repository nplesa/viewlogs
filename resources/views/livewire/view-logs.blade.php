<div>
    <h1>Activity Logs</h1>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Action</th>
                <th>Model</th>
                <th>Model ID</th>
                <th>Request Method</th>
                <th>URL</th>
                <th>IP</th>
                <th>Payload</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
        @foreach(\$logs as \$log)
            <tr>
                <td>{{ \$log->id }}</td>
                <td>{{ \$log->user_id }}</td>
                <td>{{ \$log->action }}</td>
                <td>{{ \$log->model }}</td>
                <td>{{ \$log->model_id }}</td>
                <td>{{ \$log->request_method }}</td>
                <td>{{ \$log->request_url }}</td>
                <td>{{ \$log->request_ip }}</td>
                <td>{{ json_encode(\$log->payload) }}</td>
                <td>{{ \$log->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
