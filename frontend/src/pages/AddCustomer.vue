<template>
<div>   
    <nav class="text-sm font-semibold mb-6" aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center text-blue-500">
                <a href="#" class="text-gray-700">Home</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
            </li>
            <li class="flex items-center">
                <a href="#" class="text-gray-600">Add Customer</a>
            </li>
        </ol>
    </nav>
  <ValidationObserver v-slot="{handleSubmit}">
    <form @click.prevent="handleSubmit(onSubmit)">
      <div class="form-card">
        
            <ValidationProvider name="Customer Name" rules="required" v-slot="{errors}">
              <label class="form-label" for="grid-first-name">
                Customer Name
              </label>
              <input v-model="formData.name" class="form-input" type="text" placeholder="Acme Inc">
                <p class="form-error">{{errors[0]}}</p>
            </ValidationProvider>
            <ValidationProvider name="Email" rules="required|email" v-slot="{errors}">
              <label class="form-label" for="grid-first-name">
                Email
              </label>
              <input v-model="formData.email" class="form-input" type="text" placeholder="someone@somewhere.com">
                <p class="form-error">{{errors[0]}}</p>
            </ValidationProvider>
            <ValidationProvider name="Mobile Number" rules="required|numeric" v-slot="{errors}">
              <label class="form-label" for="grid-first-name">
                Mobile Number
              </label>
              <input v-model="formData.mobile_number" class="form-input" type="text" placeholder="289900001">
               <p class="form-error">{{errors[0]}}</p>

            </ValidationProvider>

             <ValidationProvider name="Address" rules="required" v-slot="{errors}">
              <label class="form-label" for="grid-first-name">
                Address
              </label>
              <textarea v-model="formData.address" class="form-input" placeholder="123 Something Street,San francisco"></textarea>
               <p class="form-error">{{errors[0]}}</p>

            </ValidationProvider>
            <label class="form-label" for="grid-first-name">
                Incorporation Number
              </label>
              <input type="text" v-model="formData.incorporation_number" class="form-input" placeholder="1234/5431/2010" />
             
            <input type="submit" value="Create" class="form-btn" />
          </div>
          

    </form>
  </ValidationObserver>
</div>

</template>

<script>

export default {
  data: () => ({
      formData: {
        name:"",
        email:"",
        mobile_number:"",
        address:"",
        incorporation_number:""
      }
    
  }),
  methods: {
    onSubmit() {
      this.$axios.post("/api/customer", this.formData).then((response) => {
        console.log(response);
      });
    }
  }
}
</script>

<style>

</style>