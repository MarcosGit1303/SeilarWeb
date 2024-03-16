var viewer = OpenSeadragon({
  id: 'openseadragon',
  prefixUrl: 'https://cdnjs.cloudflare.com/ajax/libs/openseadragon/2.4.2/images/',
  tileSources: [
    {
      type: 'image',
      url: 'imagenes/Mapas/Detalles.png',
    },
    {
      type: 'image',
      url: 'imagenes/Mapas/Reinos.png',
    }
  ],
  minZoomLevel: 1,
  maxZoomLevel: 6,
  animationTime: 0.8,
  zoomPerScroll: 1.5,
  
});


// Obtén el contenedor por su id
var miContenedor = document.getElementById("openseadragon");

// Variable para almacenar el identificador del intervalo
var intervalo;

// Agrega un event listener para el evento mouseover
miContenedor.addEventListener("mouseover", function() {
  // Inicia la acción deseada utilizando setInterval
  intervalo = setInterval(function() {
      var currentZoom = viewer.viewport.getZoom();

      // Obtener referencias a las imágenes cargadas
      var lowResolutionImage = viewer.world.getItemAt(0);
      var highResolutionImage = viewer.world.getItemAt(1);

      // Cambiar la visibilidad de las imágenes según el nivel de zoom
      highResolutionImage.setOpacity(currentZoom >= 0 && currentZoom < 2 ? 1 : 0);
      lowResolutionImage.setOpacity(currentZoom >= 2 && currentZoom <= 6 ? 1 : 0);
  }, 200); 
});

// Agrega un event listener para el evento mouseout
miContenedor.addEventListener("mouseout", function() {
  // Detiene la acción cuando el ratón sale del contenedor utilizando clearInterval
  clearInterval(intervalo);
});
