;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname seasons-starter) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #f)))
;; Data definations:

;; Season is one of:
;; - "summer"
;; - "fall"
;; - "spring"
;; - "winter"
;; interp. the season of year

(check-expect (next "summer") "fall")
(check-expect (next "fall") "spring")
(check-expect (next "spring") "winter")
(check-expect (next "winter") "summer")

; (define (next sn) "summer") ; stub


;; Next -> Season
;; produce next season name
(define (next sn)
  (cond
     [(string=? sn "summer") "fall"]
     [(string=? sn "fall") "spring"]
     [(string=? sn "spring") "winter"]
     [else "summer"]
   )
)