<form action="{{ url($url, $id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
    @csrf
    @method('delete')
    <button type="submit" style="padding: 6px 12px; background-color: #DC3545; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;"><i class="fa fa-trash"></i> Hapus</button>
</form>