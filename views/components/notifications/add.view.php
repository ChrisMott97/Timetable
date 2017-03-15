<div class="card-panel">
    <h3 class="center">Add</h3>
    <div class="row">
        <div class="col s12">
            <div class="input-field">
                <input disabled type="text" name="username" class="validate" placeholder="Select on left" id="username" autocomplete="off">
                <label for="username">Username</label>
            </div>
            <div class="input-field">
                <input type="hidden" name="userid" class="validate" id="userid" autocomplete="off">
            </div>
            <div class="input-field">
                <input type="text" name="title" class="validate" id="title" placeholder="e.g. Maths has been moved!" autocomplete="off">
                <label for="title">Title</label>
            </div>
            <div class="input-field">
                <textarea name="details" class="validate materialize-textarea" id="details" placeholder="e.g. The lesson has been moved due to maintenance in our normal room!" autocomplete="off"></textarea>
                <label for="title">Details</label>
            </div>
            <button type="submit" onclick="createNotification();" class="btn waves-effect waves-light">Create</button>
        </div>
    </div>
</div>