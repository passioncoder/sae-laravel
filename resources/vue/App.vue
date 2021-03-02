<script>

import axios from 'axios'

export default {
  
  name: 'App',

  created() {

    axios.get('/api/postings?token=gGEnv6NeOaUPFFnmwpuVVYj4VHKFEhC4ayy7WMm5BcukglexNEPHysQi0VOF').then(response => {

      console.log(response.data)
    })
  }
}

</script>

<template>
  
  <h1>helllllooooo vuejs :)))))))</h1>

</template>
