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
                  <h3 class="card-title">Form Submit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form ref="thisForm" @submit.prevent="storeData">
                  <div class="card-body">
                    <div class="form-group">
                      <div class="row no-gutters">
                        <div class="col-md-2">
                          <label>Name:<span class="required-css">*</span></label>
                        </div>
                        <div class="col-md-10">
                          <input
                            type="text"
                            v-model="form.name"
                            class="form-control"
                            placeholder="Name"
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
                            v-model="form.email"
                            class="form-control"
                            placeholder="Email"
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
                            v-model="form.phone"
                            class="form-control"
                            placeholder="Phone"
                            @input="checkValue" 
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
                            v-model="form.address"
                            class="form-control"
                            id
                            cols="10"
                            rows="3"
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
                                    v-model="form.gender"
                                    id="customRadioInline1"
                                    value="Male"
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
                                    v-model="form.gender"
                                    id="customRadioInline2"
                                    value="Female"
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
                                    class="form-check-input"
                                    v-model="form.skills"
                                    value="PHP"
                                    type="checkbox"
                                  />
                                  <label class="form-check-label">PHP</label>
                                </div>
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    v-model="form.skills"
                                    value="OOP"
                                    type="checkbox"
                                  />
                                  <label class="form-check-label">OOP</label>
                                </div>
                                <div class="form-check">
                                 <input
                                    class="form-check-input"
                                    v-model="form.skills"
                                    value="Laravel"
                                    type="checkbox"
                                  />
                                  <label class="form-check-label">Laravel</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    v-model="form.skills"
                                    value="Ajax"
                                    type="checkbox"
                                  />
                                  <label class="form-check-label">Ajax</label>
                                </div>
                                <div class="form-check">
                                     <input
                                    class="form-check-input"
                                    v-model="form.skills"
                                    value="MySql"
                                    type="checkbox"
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
                    <button type="submit" class="btn btn-primary float-right">Save</button>
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
    <datatable></datatable>
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
  methods: {
    allData() {
      axios
        .get("/api/user/")
        .then(({ data }) => (this.posts = data))
        .catch(function(error) {
          // console.log(error);
        });
    },
    storeData() {
      axios
        .post("/api/user/store", this.form)
        .then(response => {
          Toast.fire({
            icon: "success",
            title: "Successfully Added"
          });
          this.$refs.thisForm.reset();
          location.reload();
        })
        .catch(error => (this.errors = error.response.data.errors));
        this.errors = {};
    },
    checkValue(event) {
      const pattern = /^\d+$/;
      if (!pattern.test(event.target.form.phone)) {
        this.form.phone = this.form.phone.replace(/[^0-9]/g, '');
      }
    }
  }
};
</script>