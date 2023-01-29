<template>
  <div class="row justify-content-center">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Table</h3>

            <div class="card-tools"></div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead class="table-secondary">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Gender</th>
                  <th>Skills</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(post, index) in posts" :key="post.id">
                  <td>{{ index + 1 }}.</td>
                  <td>{{ post.name }}</td>
                  <td>{{ post.email }}</td>
                  <td>{{ post.phone }}</td>
                  <td>{{ post.gender }}</td>
                  <td>{{ post.skills }}</td>
                  <td>{{ post.address }}</td>
                  <td>
                    <router-link :to="{name:'edit-data',params:{id:post.id} }" class="btn btn-sm btn-success">Edit</router-link>
                    <a @click="deleteData(post.id)" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</template>
<script>
export default {
  
  data() {
    return {
      posts: [],
      interval: null
    };
  },
  methods: {
    allData() {
      axios
        .get("/api/user/")
        .then(({ data }) => (this.posts = data))
        .catch(function(error) {
          // console.log(error);
        });
    },
    deleteData(id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(result => {
        if (result.isConfirmed) {
          axios
          .post("/api/user/destroy/"+id)
          .then(()=>{
            // console.log('ok');
            this.posts = this.posts.filter(post=>{
              return post.id !=id
            })
          })
          .catch(console.log(error))
          Swal.fire("Deleted!", "Your file has been deleted.", "success");
        }
      });
    }
  },
  created() {
    this.allData();
  }
};
</script>