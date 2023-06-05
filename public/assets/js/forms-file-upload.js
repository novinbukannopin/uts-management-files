/**
 * File Upload
 */

'use strict';

(function () {
  // previewTemplate: Updated Dropzone default previewTemplate
  // ! Don't change it unless you really know what you are doing
  const previewTemplate = `<div class="dz-preview dz-file-preview">
<div class="dz-details">
  <div class="dz-thumbnail">
    <img data-dz-thumbnail>
    <span class="dz-nopreview">No preview</span>
    <div class="dz-success-mark"></div>
    <div class="dz-error-mark"></div>
    <div class="dz-error-message"><span data-dz-errormessage></span></div>
    <div class="progress">
      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
    </div>
  </div>
  <div class="dz-filename" data-dz-name></div>
  <div class="dz-size" data-dz-size></div>
</div>
</div>`;

  // ? Start your code from here

  // Basic Dropzone
  // --------------------------------------------------------------------

  const myDropzone = new Dropzone('#dropzone-basic', {
    previewTemplate: previewTemplate,
    parallelUploads: 1,
    maxFilesize: 5,
    addRemoveLinks: true,
    maxFiles: 1
  });

//   var dropzone = new Dropzone('#dropzone-basic', {
//   previewTemplate: document.querySelector('#preview-template').innerHTML,
//   parallelUploads: 2,
//   thumbnailHeight: 120,
//   thumbnailWidth: 120,
//   maxFilesize: 3,
//   filesizeBase: 1000,
//   thumbnail: function(file, dataUrl) {
//     if (file.previewElement) {
//       file.previewElement.classList.remove("dz-file-preview");
//       var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
//       for (var i = 0; i < images.length; i++) {
//         var thumbnailElement = images[i];
//         thumbnailElement.alt = file.name;
//         thumbnailElement.src = dataUrl;
//       }
//       setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
//     }
//   }

// });


// // Now fake the file upload, since GitHub does not handle file uploads
// // and returns a 404

// var minSteps = 6,
//     maxSteps = 60,
//     timeBetweenSteps = 100,
//     bytesPerStep = 100000;

// dropzone.uploadFiles = function(files) {
//   var self = this;

//   for (var i = 0; i < files.length; i++) {

//     var file = files[i];
//     totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

//     for (var step = 0; step < totalSteps; step++) {
//       var duration = timeBetweenSteps * (step + 1);
//       setTimeout(function(file, totalSteps, step) {
//         return function() {
//           file.upload = {
//             progress: 100 * (step + 1) / totalSteps,
//             total: file.size,
//             bytesSent: (step + 1) * file.size / totalSteps
//           };

//           self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
//           if (file.upload.progress == 100) {
//             file.status = Dropzone.SUCCESS;
//             self.emit("success", file, 'success', null);
//             self.emit("complete", file);
//             self.processQueue();
//             //document.getElementsByClassName("dz-success-mark").style.opacity = "1";
//           }
//         };
//       }(file, totalSteps, step), duration);
//     }
//   }
// }

  // Multiple Dropzone
  // --------------------------------------------------------------------
  const dropzoneMulti = new Dropzone('#dropzone-multi', {
    previewTemplate: previewTemplate,
    parallelUploads: 1,
    maxFilesize: 5,
    addRemoveLinks: true
  });
})();
