<ul class="action">
    <li>
        <form action="{{ url('admin/team/delete/'.$tim->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger">
                Hapus
            </button>
        </form>
    </li>
    <li>
        <a href="{{ url('admin/team/edit/'.$tim->id) }}">
            <button class="btn btn-warning">
                Edit
            </button>
        </a>
    </li>
    <li>
        <a href="{{ url('admin/team/detail/'.$tim->id) }}">
            <button class="btn btn-info">
                Detail
            </button>
        </a>
    </li>
</ul>
