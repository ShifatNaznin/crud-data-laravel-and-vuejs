<template>
  <div class="row justify-content-center">
    <div class="col-6">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Data</h3>
                  <router-link :to="{ name: '/' }" class="btn btn-success float-right">All Data</router-link>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form ref="thisForm" @submit.prevent="updateData">
                  <div class="card-body">
                    <div class="form-group">
                      <div class="row no-gutters">
                        <div class="col-md-2">
                          <label>Name:<span class="required-css">*</span></label>
                        </div>
                        <div class="col-md-10">
                          <input
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Name"
                            :value="form.name"
                          />
                          <small class="text-danger" v-if="errors.name">
                            {{
                            errors.name[0]
                            }}
                          </small>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row no-gutters">
                        <div class="col-md-2">
                          <label>Email:<span class="required-css">*</span></label>
                        </div>
                        <div class="col-md-10">
                          <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="Email"
                            :value="form.email"
                          />
                          <small class="text-danger" v-if="errors.email">
                            {{
                            errors.email[0]
                            }}
                          </small>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row no-gutters">
                        <div class="col-md-2">
                          <label>Phone:<span class="required-css">*</span></label>
                        </div>
                        <div class="col-md-10">
                          <input
                            type="text"
                            name="phone"
                            class="form-control"
                            placeholder="Phone"
                            :value="form.phone"
                          />
                          <small class="text-danger" v-if="errors.phone">
                            {{
                            errors.phone[0]
                            }}
                          </small>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row no-gutters">
                        <div class="col-md-2">
                          <label>Address:</label>
                        </div>
                        <div class="col-md-10">
                          <textarea
                            name="address"
                            class="form-control"
                            cols="10"
                            rows="3"
                            :value="form.address"
                          ></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row no-gutters">
                        <div class="col-md-2">
                          <label for="exampleInputFile">Gender:<span class="required-css">*</span></label>
                        </div>
                        <div class="col-md-10">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="gender"
                                    id="customRadioInline1"
                                    value="Male"
                                    v-bind:checked="form.gender=='Male'"
                                  />
                                  <label class="form-check-label" for="customRadioInline1">Male</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="gender"
                                    id="customRadioInline2"
                                    value="Female"
                                    v-bind:checked="form.gender=='Female'"
                                  />
                                  <label class="form-check-label" for="customRadioInline2">Female</label>
                                </div>
                              </div>
                            </div>
                            <small class="text-danger" v-if="errors.gender">
                              {{
                              errors.gender[0]
                              }}
                            </small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row no-gutters">
                        <div class="col-md-2">
                          <label for="exampleInputFile">Skills:<span class="required-css">*</span></label>
                        </div>
                        <div class="col-md-10">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <div class="form-check">
                                  <input
                                    name="skills[]"
                                    class="form-check-input"
                                    v-bind:value="'PHP'"
                                    type="checkbox"
                                    v-bind:checked="form.skills.includes('PHP')"
                                  />
                                  <label class="form-check-label">PHP</label>
                                </div>
                                <div class="form-check">
                                  <input
                                    name="skills[]"
                                    class="form-check-input"
                                    v-bind:value="'OOP'"
                                    type="checkbox"
                                    v-bind:checked="form.skills.includes('OOP')"
                                  />
                                  <label class="form-check-label">OOP</label>
                                </div>
                                <div class="form-check">
                                  <input
                                    name="skills[]"
                                    class="form-check-input"
                                    v-bind:value="'Laravel'"
                                    type="checkbox"
                                    v-bind:checked="form.skills.includes('Laravel')"
                                  />
                                  <label class="form-check-label">Laravel</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <div class="form-check">
                                  <input
                                   name="skills[]"
                                    class="form-check-input"
                                    v-bind:value="'Ajax'"
                                    type="checkbox"
                                     v-bind:checked="form.skills.includes('Ajax')"
                                  />
                                  <label class="form-check-label">Ajax</label>
                                </div>
                                <div class="form-check">
                                  <input
                                    name="skills[]"
                                    class="form-check-input"
                                    v-bind:value="'MySql'"
                                    type="checkbox"
                                    v-bind:checked="form.skills.includes('MySql')"
                                  />
                                  <label class="form-check-label">MySql</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
    </div>
  </div>
</template>
<script>
import datatable from "./datatable.vue";
export default {
  components: {
    datatable
  },
  data() {
    return {
      form: {
        name: null,
        email: null,
        phone: null,
        address: null,
        gender: null,
        skills: []
      },
      errors: {}
    };
  },
  created() {
    let id = this.$route.params.id;
    axios
      .get("/api/user/show/" + id)
      .then(({ data }) => {
        // console.log(data);
        this.form = data
        })
      .catch(function(error) {
        // console.log(error);
      });
  },
  methods: {
    updateData() {
      let id = this.$route.params.id;
      axios
        .post("/api/user/update/"+id,new FormData(event.target))
        .then(response => {
          Toast.fire({
            icon: "success",
            title: "Successfully Updated"
          });
        })
        .catch(error => (this.errors = error.response.data.errors));
    }
  }
};
</script>