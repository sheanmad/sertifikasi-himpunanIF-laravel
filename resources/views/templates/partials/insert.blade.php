<div class="col-lg-8">
    <form method="post" action="/articles">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
          </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select" name="genre_id">
                @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>    
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="excerpt" class="form-label">Excerpt</label>
            <input type="text" class="form-control" id="excerpt" name="excerpt">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input type="text" class="form-control" id="body" name="body">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
