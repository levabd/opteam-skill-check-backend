export default {
  /**
   * Transform Vue js object to JS object
   * @param  vueObject
   * @$return object
   */
  toObject(vueObject){
    return JSON.parse(JSON.stringify(vueObject))
  },
}