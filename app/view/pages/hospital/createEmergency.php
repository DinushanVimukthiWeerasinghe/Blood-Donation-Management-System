<link rel="stylesheet" href="/public/styles/hospital/createEmergency.css">

<div class="container">
    <div class="card-header">
        <h1>Add Emergency Blood Donation Request</h1>
    </div>
    <form action="/hospital/createEmergency" method="post">
        <div class="bloodType">
            <label for="bloodType">Blood Type:</label>
            <select name="bloodType" id="bloodType">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>
        <div class="remark">
            <label for="remark">Remark: </label>
            <input type="text" name="Remark" id="remark"></input>
        </div>
        <div class="submit">
            <input type="submit" value="Submit" class="button">
        </div>
    </form>
</div>