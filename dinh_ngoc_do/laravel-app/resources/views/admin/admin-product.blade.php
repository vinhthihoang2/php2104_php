<x-admin-layout>
<div class="card">
  <div class="card-header">
    <!-- Alert -->
    @if (session('msg'))
      <div id="toastsContainerTopRight" class="toasts-top-right fixed">
        <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <strong class="mr-auto">Message</strong>
            <small>Delete</small>
            <button id="close-alert" data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="toast-body">{{ session('msg') }}</div>
        </div>
      </div>
    @else (session('error'))

    @endif
    <h3 class="card-title">Products Table</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Name</th>
          <th>Image</th>
          <th>Size</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Category</th>
          <th>Status</th>
          <th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}.</td>
            <td>
              <a href="{{ route('product.info', ['id' => $product->id]) }}" target="_blank">
                {{ $product->name }}
              </a>
            </td>
            <td>{{ $product->image }}</td>
            <td>{{ $product->size }}</td>
            <td>10</td>
            <td>${{ $product->price }}</td>
            <td><span class="badge bg-primary">{{ $product->category->name }}</span></td>
            <td>Open</td>
            <td>
              <div class="btn-group btn-group-sm">
                <a href="#" class="btn btn-success" ><i class="fas fa-eye"></i></a>
                <a href="#" class="btn btn-info"><i class="fas fa-pen"></i></a>
                <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
              </div>
              </td>
            <!-- <td>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
              </div>
            </td> -->
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
  {{ $products->links('admin.admin-paginate') }}
</div>

@section('script-close-alert')
<script type="text/javascript">
  $(document).ready(function() {
    $('#close-alert').click(function() {
      $('#toastsContainerTopRight').remove();
    });
  });
</script>
@endsection
</x-admin-layout>