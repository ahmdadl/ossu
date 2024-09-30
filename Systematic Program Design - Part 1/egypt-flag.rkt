;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname egypt-flag) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #f)))
(require 2htdp/image)

(above
 (rectangle 120 40 "solid" "red")
 (beside
  (square 40 "solid" "white")
  (overlay
    (square 15 "solid" "yellow")
    (square 40 "solid" "white")
   )
  (square 40 "solid" "white")
  )
 (rectangle 120 40 "solid" "black")
 )