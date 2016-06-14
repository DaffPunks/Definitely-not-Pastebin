<div class="main">
    <form action="{{ url('paste')}}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <!-- Task Name -->
        <div class="form-group">
            <input class="" type="text" name="name" value="{{ old('paste') }}" placeholder="Name"/>
            <div>
                <textarea type="text" name="text" id="text-field" value="{{ old('paste') }}" rows="10" placeholder="Text"></textarea>
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="send-button">
            <div>
                <button  type="submit">
                    Add Paste
                </button>
            </div>
        </div>
    </form>
    <div class="container">
    @foreach($data as $paste)
        <div class="somepaste">
            <div class="pastetext">
                <textarea type="text">{{ $paste->text }}</textarea>
            </div>
        </div>
    @endforeach
    </div>
</div>
