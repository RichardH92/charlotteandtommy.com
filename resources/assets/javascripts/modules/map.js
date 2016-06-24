// const points = [
// {
//     coordinates : [
//       -71.5386461,
//       43.2179228
//     ],
//     title       : 'Concord Marriot',
//     description : '70 Constitution Ave, Concord, NH 03301',
//     symbol      : 'bar',
//   },
//   {
//     coordinates : [
//       -71.5363718,
//       43.2091045
//     ],
//     title       : 'Holiday Inn',
//     description : '172 N Main St, Concord, NH 03301',
//     symbol      : 'lodging',
//   },
//   {
//     coordinates : [
//       -71.53356504999999,
//       43.1992705
//     ],
//     title       : 'St. John',
//     description : '72 S Main St, Concord, NH 03301',
//     symbol      : 'religious-christian',
//   },
//   {
//     coordinates : [
//       -71.4374064,
//       42.9296909
//     ],
//     title       : 'Manchester Airport',
//     description : '72 S Main St, Concord, NH 03301',
//     symbol      : 'airplane',
//   }
// ]

// export default class Map {
//   constructor(el) {
//     this.setDefaults()
//     this.addToMap()
//   }

//   setDefaults() {
//     L.mapbox.accessToken = 'pk.eyJ1IjoidG9tbXltYXJzaGFsbCIsImEiOiJjaW91N2FvcXIwMG91dHptNWo3ZDNidGQxIn0.xqG_5PJRE-VAgmPRWmw1JQ';

//     this.map = L.mapbox.map('map', 'mapbox.streets')
//         .setView([43.209, -71.535], 15);

//     this.map.touchZoom.disable();
//     this.map.doubleClickZoom.disable();
//     this.map.scrollWheelZoom.disable();
//     this.map.keyboard.disable();
//   }

//   addToMap() {
//     for (let i = 0; i < points.length; i++)
//     {
//       L.mapbox.featureLayer({
//           type : 'Feature',
//           geometry : {
//               type        : 'Point',
//               coordinates : points[i].coordinates
//           },
//           properties : {
//               title           : points[i].title,
//               description     : points[i].description,
//               'marker-size'   : 'large',
//               'marker-color'  : '#173e43',
//               'marker-symbol' : points[i].symbol
//           }
//       }).addTo(this.map);
//     }
//   }
// }
