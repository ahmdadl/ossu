;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname seat-starter) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #f)))
;; Data defination

;; SeatNumber is:
;; - Natural[1, 30]
;; interp. the seat is one from 1 to 30

(define SN1 1)
(define SN2 20)
(define SN3 30)

(check-expect (asile? SN1) true)
(check-expect (asile? 50) false)
(check-expect (asile? SN3) true)


; (define (asile? sn) false) ; stub

(define(asile? sn)
  (and
     (>= sn 1)
     (<= sn 30)
   )
)