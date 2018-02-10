<template>
   <div >
       <div>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet aspernatur consectetur, dolorum error et explicabo fugit itaque minima minus perferendis quidem quisquam quod repellendus sapiente sunt veniam voluptate? A.
       </div>
       <div>
           At dolor impedit incidunt quam quis, sunt vel! Accusantium commodi delectus deleniti earum laudantium, qui? Accusamus magni quasi soluta! A aliquam beatae cupiditate deserunt earum hic labore modi quidem veritatis.
       </div>
       <div>
           Aliquid architecto, beatae delectus dolorum eum neque quod similique totam voluptas voluptatibus! Accusantium alias atque cum dolorem doloremque, ducimus ea earum iste minima modi perspiciatis quas sapiente, tempora vel voluptates?
       </div>
       <div>
           Dolor id illo itaque magnam necessitatibus nemo quam, quos tenetur! Aliquam aliquid debitis delectus deleniti dignissimos eaque, impedit iusto magni, mollitia officia perferendis quas recusandae rem similique velit vitae voluptate.
       </div>
       <div>
           Accusantium alias aspernatur at cumque debitis delectus dolor enim ipsam laudantium nam nesciunt nostrum, obcaecati perspiciatis provident quas qui quia, quidem quo quod soluta tempora veniam vero voluptatem. Laudantium, tenetur?
       </div>
   </div>
</template>

<script>
  export default {
    middleware: 'auth',
    name: 'dashboard',
    layout: 'admin',

    metaInfo () {
      return { title: this.$t('home') }
    }
  }
</script>
