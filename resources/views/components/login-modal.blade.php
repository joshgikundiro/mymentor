<style>
    * {
        font-family: 'archivo', sans-serif;
    }
</style>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header flex justify-center px-5">
                <h5 class="modal-title font-bold" id="signupModalLabel">{{ $modeltitle }}</h5>

            </div>
            <div class="modal-body px-5">
                <div class="row flex flex-row">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="mentorRadio" value="mentor">
                        <label class="form-check-label" for="mentorRadio">
                            {{ $option1 }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="menteeRadio" value="mentee">
                        <label class="form-check-label" for="menteeRadio">
                            {{ $option2 }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" style="background-color: #DC3545" class="btn btn-danger"
                    data-bs-dismiss="modal">Close</button>
                <a id="loginButton" href="#" class="btn btn-primary">{{ $cta }}</a>
            </div>
        </div>
    </div>
</div>
