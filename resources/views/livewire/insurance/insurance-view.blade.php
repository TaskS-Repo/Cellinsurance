<div class="table-container">
    <button class="add-button" onclick="addData()"><i class="fas fa-plus-circle"></i></button>
    <table class="table table-striped table-hover table-dark  data-table">

        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>Action</th>
            </tr>
        </tfoot>

    </table>
    </div>
    <script>
        const inputelement = document.querySelector('input[type="file"]');
        const pond=FilePond.create(inputelement);

        const url="{{ url('/') }}/file/upload";
        FilePond.setOptions({
            server:{
                url:url,
                headers:{
                    'X-CSRF-Token':'{{ csrf_token() }}'
                },
            }
        })
    </script>
    <script>
        $(function(){
            var url="{{ url('/') }}/insurance";
            $('.data-table').DataTable({
                serverSide:true,
                processing:true,
                url:url,
                columns:[
                {
                   'name':'ID', 'data':'id'
                },
                {
                    'name':'NAME','data':'name'
                },
                {
                    'name':'EMAIL','data':'email'
                },
                {
                    'name':'ACTION','data':'action'
                }
                ]
            });
        })
    </script>

    <script>
        $(function(){
            $('.add-container').hide();
            $('.view-container').hide()
            $('.edit-container').hide();

            $('.close-form').click(function(){
                $('.add-container').hide();
                $('.view-container').hide()
                $('.edit-container').hide();
            })

        })
    </script>
    <script>
        function addData(){
           // alert('view');
            $(function(){
                $('.add-container').show()
            })
        }
    </script>
    <script>
        function viewData(id){
           // alert('view');
            $(function(){
                $('.view-container').show()
            })
        }
    </script>
    <script>
        function editData(id){
            $(function(){
                $('.edit-container').show()
            })
        }
    </script>
    <script>
        function deleteData(id){
            $(function(){
                const url="{{ url('/') }}/delete/data";
                $.confirm({
                    title:'Delete Data!',
                    content:'Are You Sure Want To Delete Data',
                    buttons:{
                        confirm:function(){
                            $.ajax({
                                type:'POST',
                                url:url,
                                headers:{
                                    "X-CSRF-TOKEN":'{{ csrf_token() }}'
                                },
                                data:{id:id},
                                success:function(response){
                                    swal('The Data SuccefUlly Deleted!',{title:'warning',icon:'warning',confirmButtonClass:'btn btn-outline-info'});
                                }
                            })

                        },
                        cancel:function(){
                            return true;
                        }
                    }
                })
            })
        }
    </script>
