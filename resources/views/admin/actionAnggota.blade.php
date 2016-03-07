<ul class="action">
    <li>
        <form action="{{ url('admin/anggota/delete/'.$anggota->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger">
                Hapus
            </button>
        </form>
    </li>
    <li>
        <a href="{{ url('admin/anggota/edit/'.$anggota->id) }}">
            <button class="btn btn-warning">
                Edit
            </button>
        </a>
    </li>
</ul>
